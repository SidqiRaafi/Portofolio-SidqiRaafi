// Fungsi untuk fetch semua data ide dari server (AJAX)
function loadIdeas() {
    fetch('ideas_ajax.php?action=fetch')
        .then(response => response.text())
        .then(html => document.getElementById('ideas-list').innerHTML = html);
}

// Event listener ketika halaman selesai dimuat
document.addEventListener('DOMContentLoaded', function() {
    loadIdeas(); // Ambil & tampilkan ide saat page load
    // Event submit untuk form ide user
    document.getElementById('ideas-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const title = document.getElementById('title').value.trim();
        const descriptions = document.getElementById('descriptions').value.trim();
        // Validasi panjang input sebelum submit
        if(title.length > 30 || descriptions.length > 150){
            showPopup('Title/description too long!');
            return;
        }
        // Submit data ide baru ke server
        fetch('ideas_ajax.php?action=submit', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'title=' + encodeURIComponent(title) + '&descriptions=' + encodeURIComponent(descriptions)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success){
                showPopup('Idea Submitted!');
                document.getElementById('ideas-form').reset();
                loadIdeas(); // Refresh list setelah submit
            } else {
                showPopup(data.error || 'Error submitting idea');
            }
        });
    });
});

// Fungsi untuk menampilkan popup notifikasi secara sementara
function showPopup(msg) {
    const popup = document.getElementById('popup');
    popup.innerText = msg;
    popup.style.display = 'block';
    setTimeout(()=>{ popup.style.display='none'; }, 1800);
}

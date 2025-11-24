// Efek jejak bintang pada mouse move
window.addEventListener('mousemove', function(e) {
    // Arr menentukan opacity/star density
    var arr = [1, 0.9, 0.8, 0.5, 0.2];
    arr.forEach(function(i) {
        var x = (1 - i) * 75;
        var star = document.createElement('div');
        star.className = 'star';
        // Posisi tiap bintang raw random di sekitar kursor
        star.style.top  = e.pageY + Math.round(Math.random() * x - x / 2) + 'px';
        star.style.left = e.pageX + Math.round(Math.random() * x - x / 2) + 'px';
        star.style.opacity = i;
        star.style.transition = 'opacity 0.5s linear';
        star.style.zIndex = "9999";
        document.body.appendChild(star);

        // Hilangkan bintang setelah waktu acak
        window.setTimeout(function() {
            star.style.opacity = 0;
            window.setTimeout(function() {
                if (star.parentNode === document.body) {
                    document.body.removeChild(star);
                }
            }, 500);
        }, Math.round(Math.random() * i * 600));
    });
}, false);

// Efek sparkle burst saat mouse click
window.addEventListener('mousedown', function(e) {
    var count = 14; // jumlah bintang burst
    for (let i = 0; i < count; i++) {
        // Menghitung sudut & radius untuk posisi burst
        let angle = (2 * Math.PI / count) * i;
        let r = Math.random() * 18 + 24; // radius sebaran
        let burstX = e.pageX + Math.cos(angle) * r;
        let burstY = e.pageY + Math.sin(angle) * r;
        let star = document.createElement('div');
        star.className = 'star';
        star.style.top = burstY + 'px';
        star.style.left = burstX + 'px';
        star.style.opacity = 0.7 + Math.random() * 0.3;
        star.style.transition = 'opacity 0.6s linear';
        star.style.zIndex = "9999";
        star.style.fontSize = (12 + Math.random() * 4) + 'px'; // klik: font lebih besar
        document.body.appendChild(star);

        // Hilangkan bintang burst setelah waktu acak
        window.setTimeout(function() {
            star.style.opacity = 0;
            window.setTimeout(function() {
                if (star.parentNode === document.body) {
                    document.body.removeChild(star);
                }
            }, 600);
        }, 400 + Math.random() * 400);
    }
});

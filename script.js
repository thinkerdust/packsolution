document.addEventListener('DOMContentLoaded', (event) => {
    let d = new Date();
    d = new Date(2024, 7, 10, 0, 0, 0) - d; // scene to 10 August 2024
    const l = Array.from(document.querySelectorAll('#scene .counter span')).reverse();
    const s = [1000, 60, 60, 24];

    const vset = (e, t, c) => {
        if (!e) return; // Check if element exists
        const m = c ? t % c : t;
        console.log(`Setting element ${e} with value ${m}`); // Debugging
        e.setAttribute('b', m < 10 ? '0' + m : m);
        e.classList.remove('ping');
        setTimeout(() => e.classList.add('ping'), 10);
        return m;
    };

    const calc = (t, i = 0, b = 0) => {
        if (!s[i]) return;
        t = opti(t, s[i]);
        console.log(`Calculating index ${i} with value ${t}`); // Debugging
        if (vset(l[i], t, s[i + 1]) == s[i + 1] - 1 || b) calc(t, i + 1, b);
    };

    const count = (b = 0) => {
        d -= 1000;
        console.log(`Counting down: ${d}`); // Debugging
        calc(d, 0, b);
    };

    const opti = (v, n) => (v - (v % n)) / n;

    setTimeout(() => {
        if (l.length > 0) {
            !count(1) && setInterval(count, 1000);
        } else {
            console.error('No elements found to update'); // Debugging
        }
    }, d % 1000);

    // var scene = document.getElementById('scene');
    // var parallaxInstance = new Parallax(scene);

    // parallaxInstance.friction(0.2, 0.2);
//     var scene = document.getElementById('counters');
// var parallaxInstance = new Parallax(scene, {
//     clipRelativeInput: true
// });

    
});

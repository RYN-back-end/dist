let l = document.querySelector("#mobileResponsive"), o = document.querySelector(".icon-nav-base"),
    d = document.querySelectorAll(".beforeLogin li a"), m = document.querySelectorAll(".mobileMenu li "),
    i = document.querySelector("header");

function a() {
    let e = 0;
    return l.classList.add("open"), m.forEach(t => {
        e += t.clientHeight
    }), e
}

function c(e) {
    let t = e === "down" ? 0 : a(), r = i.clientHeight, n = e === "down" ? a() : 0,
        s = e === "down" ? n / (n * .1) : t / (t * .1), u = setInterval(() => {
            t <= 0 && e === "up" || t >= n && e === "down" ? (clearInterval(u), e === "up" && (l.style.height = "", setTimeout(() => {
                l.classList.remove("open"), l.style.top = ""
            }, 300))) : (t += e === "down" ? s : -s, t > n && e === "down" && (t = n), l.style.height = `${t}px`, l.style.top = `${r}px`)
        }, 8)
}

function p() {
    o?.classList.toggle("active");
    let e = o.classList.contains("active");
    o.setAttribute("aria-expanded", e.toString()), o.setAttribute("aria-label", e ? "open menu" : "close menu"), c(e ? "down" : "up")
}

o?.addEventListener("click", p);
d.forEach(e => {
    e.getAttribute("href") == window.location.pathname && e.classList.add("active")
});
window.addEventListener("scroll", () => {
    window.scrollY >= 200 ? i.classList.add("scroll") : i.classList.remove("scroll")
});
function currentDate() {
    var dt = new Date();
    return dt.getFullYear() + "-" + ((dt.getMonth() + 1) < 9 ? "0" + (dt.getMonth() + 1) : (dt.getMonth() + 1)) + "-" + (dt.getDate() < 9 ? `0${dt.getDate()}` : dt.getDate());
}
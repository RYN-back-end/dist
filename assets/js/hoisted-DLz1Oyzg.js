import "./hoisted-lVVcYyyN.js";

var P = [];

let k = document.querySelector("#AddFoodModel .icon-close"), w = document.querySelector("#AddFoodModel .add"), C, q, f,
    s = document.getElementById("AddFoodModel"), b = document.querySelector("#AddFoodModel .showTitle"),
    m = document.querySelector("#AddFoodModel .list"), p = document.getElementById("inputSearch"),
    n = document.getElementById("quantity"), r = document.getElementById("calories"), l = 0, g = 0, y = 0,
    M = document.querySelector("#AddFoodModel .searching");
localStorage.getItem("getBmr");
localStorage.getItem("UserName");
localStorage.getItem("activeLevel");
localStorage.getItem("weigh");
let N = a => {
    s && s.classList.add("open");
    let e = a.closest("table");
    C = e.querySelector("tbody"), q = e.querySelector("tfoot tr"), console.log(q), f = e.getElementsByTagName("tr");
    let t = e.querySelector(".food-title").textContent;
    b.innerHTML = `add ${t}`, setTimeout(() => {
        s && s.classList.add("effect")
    }, 50)
}, L = () => {
    s && s.classList.remove("effect"), setTimeout(() => {
        s && s.classList.remove("open")
    }, 300), p && (p.value = ""), n && (n.value = ""), r && (r.value = "")
};
k.onclick = L;

function H(a) {
    var e = a.closest("tr");
    e.remove()
}

let c = (a, e) => {
    let t = q.cells[a];
    // console.log(t);
    let i = 0;
    for (let o = 1; o < f.length - 1; o++) {
        let u = f[o].getElementsByTagName("td")[a];
        let d = Number(u.innerText);
        i += d
    }
    if (t.innerHTML = i.toString(), e) {
        for (let o = 1; o < f.length - 1; o++) {
            let u = f[1].getElementsByTagName("td")[a];
            Number(u.innerText)
        }
        t.innerHTML = i.toString()
    }
};

function h() {
    let a = 0, e = document.querySelectorAll(".totalKcal");
    for (let t = 0; t < e.length; t++) {
        let i = e[t].innerText.trim();
        a += Number(i), localStorage.setItem(`allTotal${currentDate()}`, a.toString())
    }
}
function currentDate() {
    var dt = new Date();
    return dt.getFullYear() + "-" + ((dt.getMonth() + 1) < 9 ? "0" + (dt.getMonth() + 1) : (dt.getMonth() + 1)) + "-" + (dt.getDate() < 9 ? `0${dt.getDate()}` : dt.getDate());
}
let O = (a, e, t) => {
    let i;
    r && (i = r.value);
    let o;
    p && (o = p.value);
    let u = C.insertRow(), d = u.insertCell(0);

    d.setAttribute("class", "food-type"), d.innerHTML = o, u.insertCell(1).innerHTML = i, u.insertCell(2).innerHTML = e.toString(), u.insertCell(3).innerHTML = t.toString(), u.insertCell(4).innerHTML = a.toString();
    let _ = u.insertCell(5);
    _.setAttribute("class", "deleteRow"), _.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48">
	<path fill="currentColor" d="M20 10.5v.5h8v-.5a4 4 0 0 0-8 0m-2.5.5v-.5a6.5 6.5 0 1 1 13 0v.5h11.25a1.25 1.25 0 1 1 0 2.5h-2.917l-2 23.856A7.25 7.25 0 0 1 29.608 44H18.392a7.25 7.25 0 0 1-7.224-6.644l-2-23.856H6.25a1.25 1.25 0 1 1 0-2.5zm-3.841 26.147a4.75 4.75 0 0 0 4.733 4.353h11.216a4.75 4.75 0 0 0 4.734-4.353L36.324 13.5H11.676zM21.5 20.25a1.25 1.25 0 1 0-2.5 0v14.5a1.25 1.25 0 1 0 2.5 0zM27.75 19c.69 0 1.25.56 1.25 1.25v14.5a1.25 1.25 0 1 1-2.5 0v-14.5c0-.69.56-1.25 1.25-1.25" />
</svg>
    `;
    let S = document.querySelectorAll(".deleteRow");
    S && S.forEach(B => {
        B.addEventListener("click", function (T) {
            let v = T.target;
            H(v), c(1, !0), c(2, !0), c(3, !0), c(4, !0), h()
        })
    }), c(1, !1), c(2, !1), c(3, !1), c(4, !1), h()
};
M.addEventListener("click", async function () {
    let a = p.value.toLowerCase(), e = 0;
    a !== "" && a !== null ? (m.innerHTML = "", n && (n.value = ""), r && (r.value = ""), P.forEach(t => {
        if (t.food_name.toLowerCase().includes(a) && e < 5) {
            let i = document.createElement("li");
            i.textContent = t.food_name;
            let o = document.createElement("small");
            o.textContent = `${t.quantity} , ${t.calories} calories`, m.appendChild(i), i.appendChild(o), i.addEventListener("click", function () {
                p.value = t.food_name + "," + t.quantity, n && (n.value = "1"), r && (r.value = t.calories), m.innerHTML = ""
            }), e++, y = t.nutrients.carp, g = t.nutrients.protein, l = t.nutrients.fat, n.addEventListener("change", function () {
                Number(n.value) > 1, r && (r.value = Number(t.calories) * Number(n.value)), y = Number(t.nutrients.carp) * Number(n.value), g = Number(t.nutrients.protein) * Number(n.value), l = Number(t.nutrients.fat) * Number(n.value)
            })
        } else console.log(!1)
    }), m.classList.add("open")) : m.classList.remove("open")
});
w.onclick = function () {
    O(l, y, g)
};
let D = document.querySelectorAll(".clicked");
D.forEach(a => {
    a.addEventListener("click", function (e) {
        let t = e.target;
        N(t)
    })
});

$(document).on('click', '.addFood', function () {
    $.get('getFood.php',function (data){
        P = data;
    })
});

import {v as w, a as I, b as L} from "./hoisted-8a_iqbfc.js";
import "./hoisted-lVVcYyyN.js";

const b = [{text: "Lose 0.25 kilograms per week", value: "0.25"}, {
        text: "Lose 0.5 kilograms per week (Recommended)",
        value: "0.5"
    }, {text: "Lose 0.75 kilograms per week ", value: "0.75"}, {text: "Lose 1 kilograms per week ", value: "1"}],
    x = [{text: "Gain 0.25 kilograms per week (Recommended)", value: "0.25"}, {
        text: "Gain 0.5 kilograms per week",
        value: "0.5"
    }];
let g = document.querySelector("#chooseGoalSelect"), u = document.querySelector("#weeklyGoal"),
    m = document.querySelector("#activeLevel"), d = document.querySelector("#selectSex"),
    G = document.getElementById("signUpEmail"), T = () => {
        g.addEventListener("change", () => {
            let e = g.value;
            localStorage.setItem("selectedGoal", e), y()
        }), m.addEventListener("change", () => {
            let e = m.value;
            localStorage.setItem("activeLevel", e)
        }), d.addEventListener("change", () => {
            let e = d.value;
            localStorage.setItem("selectSex", e)
        })
    }, v = e => {
        var t = new Date, o = new Date(e);
        return t.getFullYear() - o.getFullYear()
    }, E = document.getElementById("date"), H = document.getElementById("Height"), N = document.getElementById("weigh");

function M() {
    let e = E.value;
    v(e);
    let t = H.value, o = N.value, n = G.value;
    console.log(n), localStorage.setItem("age", v(e)), localStorage.setItem("height", t), localStorage.setItem("weigh", o), localStorage.setItem("UserName", n)
}

const q = () => {
    let e = localStorage.getItem("age"), t = localStorage.getItem("height"), o = localStorage.getItem("weigh"),
        n = localStorage.getItem("selectSex"), s;
    n == "Female" ? s = 655 + Number(t) * 1.8 + Number(o) * 9.6 - Number(e) * 4.7 : s = 66 + Number(t) * 5 + Number(o) * 13.6 - Number(e) * 6.8;
    let f = localStorage.getItem("activeLevel")?.match(/[\d\.]+/g)?.map(Number), k = s * f[0];
    localStorage.setItem("getBmr", k.toFixed(0))
}, y = () => {
    u.innerHTML = "", localStorage.getItem("selectedGoal") == "gainWeight" ? x.forEach(e => {
        const t = document.createElement("option");
        t.value = e.value, t.text = e.text, u.appendChild(t)
    }) : localStorage.getItem("selectedGoal") == "loseWeight" && b.forEach(e => {
        const t = document.createElement("option");
        t.value = e.value, t.text = e.text, u.appendChild(t)
    })
}, B = () => {
    localStorage.setItem("selectedGoal", g[0].value), localStorage.setItem("activeLevel", m[0].value), localStorage.setItem("selectSex", d[0].value), T(), y()
};
let a = document.querySelectorAll(".taps"), p = document.querySelectorAll("#signUpForm input"),
    c = document?.querySelector(".prevBtn"), i = document?.querySelector(".nextBtn"),
    r = document.querySelector(".taps-h1"), l = 0;
i.addEventListener("click", e => {
    if (i.textContent.includes("Submit")) {
        (e.preventDefault(), i.type = "submit", w(p) && (M(), q(), submitForm(), console.log("form send")))
    } else {
        S(1)
    }

});
c.addEventListener("click", () => {
    S(-1)
});

function h(e) {
    localStorage.getItem("selectedGoal") == "maintainWeight" && l === 4 ? (l++, a[6].style.display = "none") : l === 6 && (l = l - 1, a[4].style.display = "none"), a[e] && (a[e].style.display = "block"), c && (e == 0 || e == a.length - 1 ? c.style.display = "none" : c.style.display = "inline"), e == a.length - 1 ? i.innerHTML = "Submit" : i.innerHTML = "Next";
    let t = document.querySelector(".born");
    switch (e) {
        case 0:
            r.innerHTML = "What’s your first name?";
            break;
        case 1:
            r.innerHTML = `Thanks ${a[0]?.querySelector("input")?.value}! Now for your goals.`;
            break;
        case 2:
            r.innerHTML = "What is your baseline activity level?";
            break;
        case 3:
            r.innerHTML = " Please select which sex we should use to calculate your calorie needs. ", t.innerHTML = " When were you born? ";
            break;
        case 4:
            r.innerHTML = " Please enter your information accurately ";
            break;
        case 5:
            r.innerHTML = " What is your weekly goal?";
            break;
        case 6:
            r.innerHTML = " Almost there! Create your account.";
            break;
        default:
            r.innerHTML = " sorry bro i'm forget the title "
    }
}

h(l);

function S(e) {
    let t = a[l].getElementsByTagName("input");
    for (let o = 0; o < t.length; o++) if (e == 1 && !I(t[o])) return !1;
    if (a[l] && (a[l].style.display = "none"), l += e, (e === -1 && l >= 0 || e === 1 && l < a.length) && h(l), l >= a.length - 1 || l < 0) return window.location.href = "/", !1
}

L(p);
B();


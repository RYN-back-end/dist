import "./hoisted-lVVcYyyN.js";

let t = document.querySelector("#bmrUpdate span"), l = document.querySelector("#userName"),
    e = document.querySelector("#FoodTotal span"), a = localStorage.getItem("getBmr"),
    r = localStorage.getItem("allTotal"), m = localStorage.getItem("UserName"), o = document.querySelector("#bmr span");
t && (t.innerHTML = a);
o && (o.innerHTML = a);
l && (l.innerHTML = m.split("@")[0]);
r !== null ? e && (e.innerHTML = r) : e && (e.innerHTML = "0");

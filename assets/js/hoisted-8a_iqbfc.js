import "./hoisted-lVVcYyyN.js";

const n = document.querySelectorAll("#loginForm input"), l = document.querySelector(".formLoginId");

function i(e) {
    const r = e?.value;
    let t = "";
    r && (t = r.trim());
    let a = e.parentElement?.nextElementSibling;
    const s = e.nextElementSibling;
    if (t == "") {
        if (e.classList.add("error"), s?.classList.remove("effect"), e.classList.remove("valid"), a) switch (a.style.display = "block", e.id) {
            case"name":
                a.innerText = "Please enter an first name";
                break;
            case"date":
                a.innerText = "Please enter a  date of birth";
                break;
            case"EmailAddressLogin":
            case"signUpEmail":
                a.innerText = "Please enter an email address";
                break;
            case"passwordLogin":
            case"signUpPassword":
                a.innerText = "Please enter a password";
                break;
            case"Height":
                a.innerText = "Please enter your height.";
                break;
            case"weigh":
                a.innerText = "Please enter your weigh.";
                break;
            case"GoalsWeight":
                a.innerText = "Please enter your goal weigh.";
                break;
            default:
                a.innerText = "Please fill this filed."
        }
        return !1
    } else return t && (e.classList.remove("error"), e.classList.add("valid")), s?.classList.add("effect"), a && (a.style.display = "none", a.innerText = ""), !0
}

function o(e) {
    let r = !0;
    return e.forEach(t => {
        r = i(t) && r
    }), r
}

const c = e => {
    e.forEach(r => {
        r.addEventListener("blur", () => {
            i(r)
        })
    })
};
c(n);

export {i as a, c as b, o as v};

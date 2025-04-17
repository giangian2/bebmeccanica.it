var TF_Unit_Control_Selector=function(){function t(){this.initEvents()}var e=t.prototype;return e.initEvents=function(){document.querySelectorAll(".tf-unit-control--value").forEach(function(t){tfAutosizeInput(t)}),document.addEventListener("dblclick",function(t){this.onSelectValue(t)}.bind(this)),document.addEventListener("input",function(t){this.onType(t)}.bind(this)),document.addEventListener("click",function(t){this.onToggle(t),this.onOutsideClick(t),this.onSelect(t),this.onFocus(t)}.bind(this)),document.addEventListener("focusout",function(t){this.onStoppedTyping(t)}.bind(this))},e.onType=function(t){var e,t=t.target.closest(".tf-unit-control--value");t&&(e=this.getUnitWrapper(t),""===t.value?e.classList.remove("has-value"):e.classList.add("has-value"))},e.onSelectValue=function(t){var t=t.target.closest(".tf-unit-control");t&&((t=t.querySelector(".tf-unit-control--value")).focus(),t.select())},e.onFocus=function(t){var e=t.target.closest(".tf-unit-control"),t=t.target.closest(".tf-unit-control-dropdown");e&&!t&&"auto"!==e.querySelector("input.tf-unit-control-unit-value").value&&(e.querySelector("input.tf-unit-control--value").focus(),e.classList.add("has-focus"))},e.onStoppedTyping=function(t){t=t.target.closest(".tf-unit-control--value");t&&this.getUnitWrapper(t).classList.remove("has-focus")},e.onToggle=function(t){var t=t.target.closest(".tf-unit-control-dropdown--opener");t&&(this.closeAllInstances(),(t=this.getWrapper(t)).querySelector(".tf-unit-control-dropdown--drop"))&&(t.classList.contains("is-open")?t.classList.remove("is-open"):t.classList.add("is-open"))},e.onOutsideClick=function(t){t.target.closest(".tf-unit-control-dropdown")||this.closeAllInstances()},e.closeAllInstances=function(){document.querySelectorAll(".tf-unit-control-dropdown.is-open").forEach(function(t){t.classList.remove("is-open")})},e.getUnitWrapper=function(t){return t.closest(".tf-unit-control")},e.getWrapper=function(t){return t.closest(".tf-unit-control-dropdown")},e.onSelect=function(t){var e,n,o,s,t=t.target.closest(".tf-unit-control-dropdown--drop--item");t&&(o=this.getWrapper(t),e=t.innerHTML,(s=!!t.closest(".tf-unit-control")&&t.closest(".tf-unit-control"))?(n=s.querySelector("input.tf-unit-control--value"),o.querySelector(".tf-unit-control-dropdown--opener--selected--unit").innerHTML=e,"auto"===(s.querySelector("input.tf-unit-control-unit-value").value=e)?(s.classList.add("is-readonly"),n.setAttribute("readonly",""),n.removeAttribute("placeholder"),n.value=""):(n.removeAttribute("readonly"),n.setAttribute("placeholder",s.dataset.hint),setTimeout(function(){n.focus()},10),s.classList.add("has-focus"),s.classList.remove("is-readonly"),""===n.value&&s.classList.remove("has-value")),n.dispatchEvent(new CustomEvent("input"))):t.closest(".tf-dimension-control")&&((o=t.closest(".tf-dimension-control")).querySelector("input.tf-unit-control-unit-value").value=e,o.querySelectorAll(".tf-unit-control-dropdown--opener--selected--unit").forEach(function(t){t.innerHTML=e}),o.querySelector("input:first-of-type").focus()),(s=t.parentElement.querySelector(".tf-unit-control-dropdown--drop--item.selected"))&&s.classList.remove("selected"),t.classList.add("selected"),this.closeAllInstances())},t}();document.addEventListener("DOMContentLoaded",function(){new TF_Unit_Control_Selector});


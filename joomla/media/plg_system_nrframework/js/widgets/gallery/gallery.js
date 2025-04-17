function _createForOfIteratorHelperLoose(t,e){var r,a="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(a)return(a=a.call(t)).next.bind(a);if(Array.isArray(t)||(a=_unsupportedIterableToArray(t))||e&&t&&"number"==typeof t.length)return a&&(t=a),r=0,function(){return r>=t.length?{done:!0}:{done:!1,value:t[r++]}};throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function _unsupportedIterableToArray(t,e){var r;if(t)return"string"==typeof t?_arrayLikeToArray(t,e):"Map"===(r="Object"===(r=Object.prototype.toString.call(t).slice(8,-1))&&t.constructor?t.constructor.name:r)||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?_arrayLikeToArray(t,e):void 0}function _arrayLikeToArray(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,a=new Array(e);r<e;r++)a[r]=t[r];return a}var TF_Gallery=function(){function t(t){this.cls=t=void 0===t?".tf-gallery-wrapper":t,this.initEvents(),this.initLightbox()}var e=t.prototype;return e.initEvents=function(){document.addEventListener("click",function(t){this.onTagClick(t)}.bind(this)),document.addEventListener("change",function(t){this.onTagDropdownSelect(t)}.bind(this))},e.initLightbox=function(){var t=document.querySelectorAll(this.cls+".lightbox");if(t.length)for(var e=_createForOfIteratorHelperLoose(t);!(r=e()).done;){var r=r.value,a=(r.lightbox&&r.lightbox.destroy(),{selector:".tf-gallery-lightbox-item."+r.dataset.id+":not(.tf-gallery-is-hidden)",touchNavigation:!0});r.lightbox=GLightbox(a)}},e.onTagClick=function(t){var e,r,a,i=t.target.closest(".tf-gallery-tags--item");i&&(t.preventDefault(),t=i.closest(this.cls))&&(e=i.classList.contains("active"),"*"===(r=i.dataset.tag)&&t.querySelector('.tf-gallery-tags--item.active[data-tag="*"]')||((a=t.querySelector(".tf-gallery-tags--item.active"))&&a.classList.remove("active"),e?r="*":i.classList.add("active"),this.updateDropdownTagFilterValue(t,r),this.filterGalleryTags(t,r),this.initLightbox()))},e.updateDropdownTagFilterValue=function(t,e){t=t.querySelector(".tf-gallery-tags-dropdown");t&&(t.value=e)},e.onTagDropdownSelect=function(t){var e=t.target.closest(".tf-gallery-tags-dropdown");e&&(e=e.closest(this.cls))&&(t=t.target.value,this.updateDefaultTagFilterValue(e,t),this.filterGalleryTags(e,t))},e.updateDefaultTagFilterValue=function(t,e){e=t.querySelector('.tf-gallery-tags--item[data-tag="'+e+'"]');e&&((t=t.querySelector(".tf-gallery-tags--item.active"))&&t.classList.remove("active"),e.classList.add("active"))},e.filterGalleryTags=function(t,e){t.querySelector(".gallery-items").querySelectorAll(":scope > .item").forEach(function(t){"*"===e||t.dataset.tags&&(JSON.parse(t.dataset.tags)||[]).includes(e)?(t.classList.remove("tf-gallery-is-hidden"),t.querySelector("a")&&t.querySelector("a").classList.remove("tf-gallery-is-hidden")):(t.classList.add("tf-gallery-is-hidden"),t.querySelector("a")&&t.querySelector("a").classList.add("tf-gallery-is-hidden"))})},t}();document.addEventListener("DOMContentLoaded",function(t){new TF_Gallery});


var TF_Gallery_Manager=function(){function e(e){this.widget=e,this.dz_element=this.widget.querySelector(".tf-gallery-dz"),this.dz=null,this.token=Joomla.getOptions("csrf.token"),this.dropzone_message=this.dz_element.querySelector(".dz-message");e=parseInt(this.dz_element.dataset.maxfiles),this.max_files=e||null,e=parseFloat(this.dz_element.dataset.maxfilesize);this.max_file_size=e||null,this.baseurl=this.dz_element.dataset.baseurl,this.rooturl=this.dz_element.dataset.rooturl,this.upload_url="index.php?option=com_ajax&format=raw&plugin=Widgets&widget="+this.widget.dataset.widget,this.item_id=0,this.is_media_uploader_file=!1,this.media_uploader_filename="",this.actions_dropdown_class=".tf-gallery-actions-dropdown",Dropzone.autoDiscover=!1,this.initSortable(),this.detectJ3MediaUploaderImage(),this.initEvents(),this.dz_element.GalleryManager=this}var t=e.prototype;return t.initSortable=function(){this.widget.classList.contains("readonly")||this.widget.classList.contains("disabled")||this.widget.classList.contains("ordering-default")&&new Sortable(this.dz_element,{animation:150,handle:".dz-thumb"})},t.initEvents=function(){this.widget.addEventListener("click",function(e){this.onAcceptGeneratedAlt(e),this.onDiscardGeneratedAlt(e),this.onGenerateAltTag(e),this.onGenerateAltTextToAllSelectedImages(e),this.onEditItemOpenModal(e),this.onSaveEditedItem(e),this.onRemovalOfSelectedImages(e),this.onSelectUnselectAllImages(e),this.onJ4MediaManagerSelection(e),this.onRegenerateImages(e)}.bind(this)),this.widget.addEventListener("dblclick",function(e){this.onDoubleClickSelectItem(e)}.bind(this)),this.widget.addEventListener("change",function(e){this.selectItem(e)}.bind(this)),this.widget.addEventListener("keyup",function(e){this.updateInitialAlt(e)}.bind(this))},t.updateInitialAlt=function(e){var t=e.target.closest(".tf-gallery-preview-item");t&&(e=e.target.closest("textarea.item-alt"))&&!e.getAttribute("readonly")&&t.setAttribute("data-initial-alt",e.value)},t.onAcceptGeneratedAlt=function(e){var t,e=e.target.closest(".tf-gallery-preview-generate-caption-item-accept");e&&(t=(e=e.closest(".tf-gallery-preview-item")).querySelector("textarea.item-alt"),e.classList.remove("generated-caption-choices-visible"),t.removeAttribute("readonly"),e.classList.remove("has-existing-alt"),e.querySelector(".tf-gallery-preview-item--alt--existing").innerHTML="",e.setAttribute("data-initial-alt",t.value),this.showEditedBadge(e))},t.showEditedBadge=function(e){e.classList.add("is-edited-animation"),setTimeout(function(){e.classList.remove("is-edited-animation")},1300)},t.onDiscardGeneratedAlt=function(e){var e=e.target.closest(".tf-gallery-preview-generate-caption-item-discard");e&&(e=e.closest(".tf-gallery-preview-item"),this.discardItem(e))},t.discardItem=function(e){var t=e.querySelector("textarea.item-alt");e.classList.remove("generated-caption-choices-visible"),t.removeAttribute("readonly"),e.classList.remove("has-existing-alt"),e.querySelector(".tf-gallery-preview-item--alt--existing").innerHTML="",e.querySelector(".item-alt").value=e.dataset.initialAlt||""},t.onGenerateAltTag=function(e){var t=e.target.closest(".tf-gallery-preview-generate-caption-item");t&&(e.preventDefault(),e=t.closest(".tf-gallery-preview-item"),this.generateAIImageDescription(e).then(function(){}).catch(function(e){console.error("Error generating AI description:",e)}))},t.generateAIImageDescription=function(n,r){var o=this;return void 0===r&&(r=!1),new Promise(function(t,i){n.classList.remove("generated-caption-choices-visible"),n.classList.add("loading-state");var s=n.querySelector(".item-alt"),a=s.value,e=o.baseurl+o.upload_url+"&task=generate_caption&"+o.token+"=1",l=new FormData;l.append("image",n.querySelector(".item-original").value),fetch(e,{method:"POST",body:l}).then(function(e){return e.json()}).then(function(e){if(e.error)throw new Error(e.message);r||(s.setAttribute("readonly","readonly"),n.classList.add("generated-caption-choices-visible"),""!==a&&(n.classList.add("has-existing-alt"),n.querySelector(".tf-gallery-preview-item--alt--existing").innerHTML=a)),s.value=e.message,n.classList.remove("loading-state"),t()}).catch(function(e){n.classList.remove("loading-state"),alert(e),i(e)})})},t.onGenerateAltTextToAllSelectedImages=function(e){var s,a,l=this;e.target.closest(".tf-gallery-ai-apply-all-button")&&(e.preventDefault(),confirm(Joomla.JText._("NR_GENERATE_IMAGE_DESC_TO_ALL_IMAGES_CONFIRM")))&&((s=(s=this.getAllItems(!0)).length?s:this.getAllItems()).length?(s.forEach(function(e){e.closest(".tf-gallery-preview-item").classList.add("loading-state")}),(a=this.widget.querySelector(".tf-gallery-actions")).classList.add("is-disabled"),function e(t){var i;(t=void 0===t?0:t)>=s.length?a.classList.remove("is-disabled"):(t===s.length-1&&setTimeout(function(){a.classList.add("show-ai-status"),setTimeout(function(){a.classList.remove("show-ai-status")},2e3)},300),i=s[t].closest(".tf-gallery-preview-item"),l.generateAIImageDescription(i,!0).then(function(){l.showEditedBadge(i),l.deselect(i),e(t+1)}).catch(function(e){console.error(e),a.classList.remove("is-disabled"),s.forEach(function(e){e.closest(".tf-gallery-preview-item").classList.remove("loading-state")})}))}()):alert("No images selected."))},t.onEditItemOpenModal=function(e){var t=e.target.closest(".tf-gallery-preview-edit-item");if(t){e.preventDefault();var e=this.dz_element.dataset.rooturl,i=t.closest(".nrf-widget.tf-gallery-manager").querySelector(".tf-gallery-manager-edit-modal-content"),t=t.closest(".tf-gallery-preview-item"),s=t.dataset.itemId;i.querySelector('input[type="hidden"].item_id').value=s;s=(s=t.querySelector("input.item-original").value)||t.querySelector("input.item-source").value,e=(i.querySelector(".tf-gallery-manager-edit-modal-content--preview").style.setProperty("--tf-gallery-manager-edit-modal-preview-image","url("+e+s+")"),t.querySelector("textarea.item-alt").value),s=(i.querySelector('input[type="text"][name="alt"]').value=e,t.querySelector("input.item-caption").value);if(i.querySelector('textarea[name="caption"]').value=s,window.Joomla.Modal){var a=i.querySelector("joomla-field-fancy-select").choicesInstance,e=(a.removeActiveItems(),a._store.choices),s=(a.setChoices(e,"value","label",!0),t.querySelector("input.item-tags").value||"");(s=JSON.parse(s)||[]).length&&s.forEach(function(e){a.setChoiceByValue(e+"")})}else{var l=i.querySelector('select[name="tags[]"]'),n=l.options.length;if(n){for(var r=0;r<n;r++)l.options[r].selected=!1;jQuery(l).trigger("liszt:updated")}e=t.querySelector("input.item-tags").value||"";(e=JSON.parse(e)||[]).length&&(e.forEach(function(e){jQuery(l).find('option[value="'+e+'"]').prop("selected",!0)}),jQuery(l).trigger("liszt:updated"))}}},t.onSaveEditedItem=function(e){var t,i,e=e.target.closest(".tf-gallery-button-save-edited-item");e&&(t=(e=e.closest(".nrf-widget.tf-gallery-manager").querySelector(".tf-gallery-manager-edit-modal-content")).querySelector('input[type="hidden"].item_id').value,t=this.widget.querySelector('.tf-gallery-preview-item[data-item-id="'+t+'"]'),i=e.querySelector('input[type="text"][name="alt"]').value,t.querySelector("textarea.item-alt").value=i,t.querySelector("textarea.item-alt").setAttribute("data-initial-alt",i),i=e.querySelector('textarea[name="caption"]').value,t.querySelector('input[type="hidden"].item-caption').value=i,i="",i=window.Joomla.Modal?e.querySelector("joomla-field-fancy-select").choicesInstance.getValue(!0):jQuery(e.querySelector('select[name="tags[]"]')).chosen().val(),Array.isArray(i)&&(t.querySelector('input[type="hidden"].item-tags').value=JSON.stringify(i)),this.showEditedBadge(t))},t.lazyLoadThumbs=function(){var t,i=this;window.IntersectionObserver&&(t=new IntersectionObserver(function(e,t){e.forEach(function(e){e.isIntersecting&&(i.loadThumbnail(e.target.closest(".tf-gallery-preview-item")),t.unobserve(e.target))})},{rootMargin:"0px 0px 0px 0px"}),this.dz_element.querySelectorAll("img:not([src])").forEach(function(e){t.observe(e)}))},t.init=function(){var s=this,e=!!this.widget.querySelector(':scope > input[type="hidden"]');this.dz=new Dropzone(this.dz_element,{url:this.baseurl+this.upload_url,previewTemplate:this.dz_element.nextElementSibling.innerHTML,clickable:[this.dz_element,this.widget.querySelector(".tf-gallery-add-item-button")],maxFilesize:this.max_file_size,uploadMultiple:!0,maxFiles:this.max_files,acceptedFiles:this.dz_element.dataset.acceptedfiles,autoProcessQueue:!0,parallelUploads:1,filesizeBase:2048,createImageThumbnails:!0,dictRemoveFileConfirmation:Joomla.JText._("NR_GALLERY_MANAGER_CONFIRM_DELETE"),thumbnailHeight:220,thumbnailWidth:300,timeout:0,init:function(){this.on("addedfile",function(e){0!==this.files.length&&s.markNotClickable(this),s.previewMessageHide(),s.onAddedFile(e),s.max_files===this.files.length&&s.disableAddButton()}),s.handleMocks(this),this.on("sending",function(e,t,i){s.onSendingFile(i)}),this.on("success",function(e){s.onSuccessUploadFile(e)}),this.on("removedfile",function(e){s.onRemovedFile(e)}),this.on("error",function(e,t,i){s.onErrorFile(e,t,i)}),this.on("queuecomplete",function(e){s.widget.classList.remove("dz-working")}),e&&(s.determineFieldValidityAndToggleValidatorField(this.files),this.on("removedfile",function(){s.determineFieldValidityAndToggleValidatorField(this.files)}),this.on("complete",function(){s.determineFieldValidityAndToggleValidatorField(this.files)}))}}),this.lazyLoadThumbs()},t.determineFieldValidityAndToggleValidatorField=function(e){e=e.some(function(e){return"success"==e.status||e.exists});this.toggleHiddenValidatorField(e?"hide":"show")},t.toggleHiddenValidatorField=function(e){void 0===e&&(e="hide");var t=this.widget.querySelector(':scope > input[type="hidden"]');"hide"==e?(t.removeAttribute("required"),t.classList.remove("required")):(t.setAttribute("required","required"),t.classList.add("required"))},t.onAddedFile=function(e){var t;null==e.upload?(t={source:e.source,slideshow:e.slideshow,original:e.original,thumbnail:e.thumbnail,caption:e.caption,alt:e.alt,tags:e.tags,is_media_uploader_file:e.is_media_uploader_file},this.createHiddenInput(e.previewTemplate,t),e.temp&&e.previewTemplate.classList.add("dz-temp"),e.error&&(e.previewTemplate.classList.add("dz-error"),(t=e.previewTemplate.querySelector(".tf-gallery-preview-error")).innerHTML=e.error,t.classList.add("visible"))):(this.widget.classList.add("dz-working"),e.previewTemplate.classList.add("new"),this.showItemInQueueMessage(e.previewTemplate))},t.handleMocks=function(e){if(t=this.dz_element.dataset.value){for(var t=JSON.parse(t),i=0;i<t.length;i++){var s=t[i];s.accepted=!0,s.exists||(s.error=Joomla.JText._("NR_GALLERY_MANAGER_FILE_MISSING")),e.emit("addedfile",s),e.emit("success",s),e.emit("complete",s),this.setThumbValue(e.element,s.thumb),e.files.push(s),0!==e.files.length&&this.markNotClickable(e)}this.max_files===t.length&&this.disableAddButton()}},t.markNotClickable=function(e){this.widget.classList.add("dz-has-items"),this.dz_element.classList.remove("dz-clickable"),this.dz_element.removeEventListener("click",e.listeners[1].events.click)},t.markClickable=function(){this.widget.classList.remove("dz-has-items"),this.dz_element.dataset.value="",this.dz.destroy(),this.init()},t.setThumbValue=function(e,t){t&&(e.querySelector("input.item-thumb").value=t)},t.onRemovedFile=function(e){var t;0==this.dz.files.length&&(this.markClickable(),this.resetSelectedUnselectAllButton(),this.previewMessageShow(),this.setIsEditing(!1)),this.dz.files.length<this.max_files&&this.enableAddButton(),0!=e.size&&0!=e.accepted&&((t=new XMLHttpRequest).onload=function(){200<=t.status&&t.status<300||alert(t.responseText)},t.open("POST",this.baseurl+this.upload_url),t.setRequestHeader("X-CSRF-Token",this.token),(fd=new FormData).append("task","delete"),fd.append("item_id",this.widget.dataset.itemId),fd.append("field_id",this.widget.dataset.fieldId),fd.append("context",this.widget.dataset.context),fd.append("source","source"in e&&e.source?e.source:e.previewElement.querySelector(".item-source").value),fd.append("slideshow","slideshow"in e&&e.slideshow?e.slideshow:e.previewElement.querySelector(".item-slideshow")?e.previewElement.querySelector(".item-slideshow").value:""),fd.append("original",e.previewElement.querySelector(".item-original").value),fd.append("thumbnail",e.previewElement.querySelector(".item-thumbnail").value),fd.append("is_media_uploader_file",void 0!==e.is_media_uploader_file&&e.is_media_uploader_file),t.send(fd))},t.onSendingFile=function(e){e.append("task","upload"),e.append("item_id",this.widget.dataset.itemId),e.append("field_id",this.widget.dataset.fieldId),e.append("context",this.widget.dataset.context),e.append("random_suffix",!(!document.querySelector(".gallery_random_suffix")||!document.querySelector('.gallery_random_suffix input[type="checkbox"]:checked'))),e.append(this.token,1),this.is_media_uploader_file&&(e.append("media_uploader",1),e.append("media_uploader_filename",this.media_uploader_filename),this.is_media_uploader_file=!1,this.media_uploader_filename="")},t.loadThumbnail=function(e){var t=(t=(t=e.querySelector(".item-thumbnail").value)||((t=e.querySelector(".item-original").value)||(e.querySelector(".item-slideshow")?e.querySelector(".item-slideshow").value:"")))||e.querySelector(".item-source").value,t=this.dz_element.dataset.rooturl+t,i=this,s=new Image;s.onload=function(){i.setPreviewImageAspectRatio(e,this.width,this.height)},s.src=t,e.querySelector("img").src=t},t.setPreviewImageAspectRatio=function(e,t,i){t/=i;(t<.3||3<t)&&e.querySelector(".dz-thumb img").classList.add("fit-contain")},t.onSuccessUploadFile=function(e){var t=e.xhr.response;try{t=JSON.parse(t),this.setPreviewImageAspectRatio(e.previewElement,e.width,e.height),e.source=t.source,t.slideshow&&(e.slideshow=t.slideshow),t.original&&(e.original=t.original),t.thumbnail&&(e.thumbnail=t.thumbnail),this.createHiddenInput(e.previewTemplate,t),this.hideItemInQueueMessage(e.previewTemplate)}catch(e){alert("Error! "+e)}},t.onErrorFile=function(e,t,i){this.hideItemInQueueMessage(e.previewTemplate),e.thumbnail=e.upload.uuid,e.previewTemplate.querySelector(".item-thumbnail").value=e.upload.uuid,e.previewTemplate.querySelectorAll("*[name]").forEach(function(e){e.removeAttribute("name")})},t.previewMessageHide=function(){this.dropzone_message.classList.add("is-hidden")},t.previewMessageShow=function(){this.dropzone_message.classList.remove("is-hidden")},t.createHiddenInput=function(e,t){e.classList.remove("template"),this.setElementItemID(e,"item-caption"),this.setCaption(e,t),this.setElementItemID(e,"select-item-checkbox input","id"),this.setElementItemID(e,"select-item-checkbox label","for"),this.setElementItemID(e,"item-thumbnail"),this.setThumbnailPath(e,t),this.setElementItemID(e,"item-source"),this.setSourcePath(e,t),this.setOriginalPath(e,t),this.setElementItemID(e,"item-original"),this.setElementItemID(e,"item-slideshow"),this.setSlideshowPath(e,t),this.setElementItemID(e,"item-alt"),this.setAltText(e,t),this.setElementItemID(e,"item-tags"),this.setItemTags(e,t),e.setAttribute("data-item-id",t.thumbnail||t.source),this.item_id++},t.setThumbnailPath=function(e,t){t.thumbnail&&(e.querySelector(".item-thumbnail").value=t.thumbnail)},t.setSourcePath=function(e,t){t.source&&(e.querySelector(".item-source").value=t.source)},t.setOriginalPath=function(e,t){t.original&&((e=e.querySelector(".item-original")).name=this.dz_element.dataset.inputname+"[image]",e.value=t.original)},t.setSlideshowPath=function(e,t){t.slideshow&&(e=e.querySelector(".item-slideshow"))&&(e.value=t.slideshow)},t.setAltText=function(e,t){var i;t.alt&&((i=e.querySelector(".item-alt")).value=t.alt,e.setAttribute("data-initial-alt",i.value))},t.setCaption=function(e,t){t.caption&&(e.querySelector(".item-caption").value=t.caption)},t.setItemTags=function(e,t){t.tags&&(e.querySelector(".item-tags").value=t.tags)},t.setElementItemID=function(e,t,i){void 0===i&&(i="name");e=e.querySelector("."+t);e&&(t=e.getAttribute(i).replace("ITEM_ID",this.item_id),e.setAttribute(i,t))},t.dataURItoBlob=function(e){for(var t=atob(e.split(",")[1]),e=e.split(",")[0].split(":")[1].split(";")[0],i=new ArrayBuffer(t.length),s=new Uint8Array(i),a=0;a<t.length;a++)s[a]=t.charCodeAt(a);return new Blob([i],{type:e})},t.fileToDataURL=function(e,t){var i=new XMLHttpRequest;i.onload=function(){var e=new FileReader;e.onloadend=function(){t(e.result)},e.readAsDataURL(i.response)},i.open("GET",e),i.responseType="blob",i.send()},t.detectJ3MediaUploaderImage=function(){var s,a=this,e=(MutationObserver=window.MutationObserver||window.WebKitMutationObserver,this.widget.querySelector(".media_uploader_file"));s=e,new MutationObserver(function(e,t){if("value"==e[0].attributeName){if(!s.value)return!1;var e=s.value,i=a.rooturl+e;a.addFileByURL(i,e)}}).observe(s,{attributes:!0})},t.onJ4MediaManagerSelection=function(e){var t,i,s=e.target.closest(".tf-gallery-button-save-selected");s&&(s=s.closest(".nrf-widget.tf-gallery-manager"),t=this.widget.querySelector("iframe").contentDocument.querySelectorAll(".media-browser-items .media-browser-item.selected"))&&(e.preventDefault(),i=s.querySelector(".tf-gallery-dz"),t.forEach(function(e){var e=e.querySelector(".image-background .image-cropped"),e=(e.src||e.style.backgroundImage.match(/url\(["']?([^"']*)["']?\)/)[1]).split("?")[0],t="images"+e.split("/images")[1];i.GalleryManager.addFileByURL(e,t)}))},t.onRegenerateImages=function(e){var t,a,i,s,l=e.target.closest(".tf-gallery-regenerate-images-button");l&&!e.target.closest(".message")&&confirm(Joomla.JText._("NR_GALLERY_MANAGER_CONFIRM_REGENERATE_IMAGES"))&&(e.preventDefault(),(t=this).widget.classList.add("dz-working"),l.classList.add("working"),e=this.widget.querySelectorAll(".tf-gallery-preview-item"),a=[],e.forEach(function(e){var t=e.querySelector('input[type="hidden"].item-source').value,i=e.querySelector('input[type="hidden"].item-slideshow')?e.querySelector('input[type="hidden"].item-slideshow').value:"",s=e.querySelector('input[type="hidden"].item-original').value,e=e.querySelector('input[type="hidden"].item-thumbnail').value;a.push({source:t,slideshow:i,original:s,thumbnail:e})}),i=l.querySelector(".message"),e=this.baseurl+this.upload_url+"&task=regenerate_images&"+this.token+"=1",(s=new FormData).append("item_id",this.widget.dataset.itemId),s.append("field_id",this.widget.dataset.fieldId),s.append("context",this.widget.dataset.context),s.append("items",JSON.stringify(a)),fetch(e,{method:"POST",body:s}).then(function(e){return e.json()}).then(function(e){i.innerHTML=e.message,i.classList.add("visible"),setTimeout(function(){i.classList.remove("visible")},1500),l.classList.remove("working"),t.widget.classList.remove("dz-working"),t.updateMissingSourceImages(e.items)}).catch(function(e){alert(e)}))},t.updateMissingSourceImages=function(e){var t=this;e.forEach(function(e){t.widget.querySelector('.tf-gallery-preview-item[data-item-id="'+e.thumbnail+'"]').querySelector('input[type="hidden"].item-source').value=e.source})},t.onDoubleClickSelectItem=function(e){var e=e.target.closest(".tf-gallery-preview-item");e&&((e=e.querySelector('input[type="checkbox"]')).checked=!e.checked,e.dispatchEvent(new Event("change",{bubbles:!0})))},t.addFileByURL=function(i,s){var a=this,l=this.widget.querySelector(".media_uploader_file");this.fileToDataURL(i,function(e){var t=e.split(",")[0].match(/[^:\s*]\w+\/[\w-+\d.]+(?=[;| ])/)[0],e=a.dataURItoBlob(e,t);e.name=s,a.dz.addFile(e),a.is_media_uploader_file=!0,a.media_uploader_filename=i,l.value=""})},t.resetSelectedUnselectAllButton=function(){0==this.dz.files.length&&this.updateSelectButton("select",!0)},t.updateSelectButton=function(e,t){void 0===e&&(e="select"),void 0===t&&(t=!1);var i=this.widget.querySelector(".tf-gallery-actions "+this.actions_dropdown_class),s=i.querySelector(".tf-gallery-actions-dropdown-current"),a="icon-checkbox-checked",l="icon-checkbox-unchecked";"select"===e?(s.classList.remove("unselect"),s.classList.add("select")):(s.classList.remove("select"),s.classList.add("unselect"),e=l,l=a,a=e),s.querySelector("i").classList.remove(a),s.querySelector("i").classList.add(l),t&&i.setAttribute("disabled",!0)},t.onRemovalOfSelectedImages=function(e){var t=this,i=e.target.closest(".tf-gallery-remove-selected-items-button");if(i){e.preventDefault();var s,e=this.getAllItems(!0);if(0==e.length)return!1;confirm(Joomla.JText._("NR_GALLERY_MANAGER_CONFIRM_DELETE_ALL_SELECTED"))&&(i.setAttribute("disabled",!0),s=[],e.forEach(function(e){s.push(e.closest(".tf-gallery-preview-item").querySelector(".item-thumbnail").value)}),this.dz.files.filter(function(e){return s.includes(e.thumbnail)}).forEach(function(e){t.dz.removeFile(e)}),i.removeAttribute("disabled"),this.setIsEditing(!1),this.resetSelectedUnselectAllButton())}},t.selectItem=function(e){var t=e.target.closest(".select-item-checkbox");t&&(this.updateGalleryItem(t.querySelector('input[type="checkbox"]')),e.preventDefault())},t.setIsEditing=function(e){e?this.widget.classList.add("editing"):this.widget.classList.remove("editing")},t.updateGalleryItem=function(e){var t=this.getAllItems().length,i=this.getAllItems(!0).length;0<i?this.widget.querySelector(this.actions_dropdown_class+" .dropdown-menu li a.unselect").classList.remove("is-hidden"):(this.widget.querySelector(this.actions_dropdown_class+" .dropdown-menu li a.select").classList.remove("is-hidden"),this.widget.querySelector(this.actions_dropdown_class+" .dropdown-menu li a.unselect").classList.add("is-hidden"),this.updateSelectButton("select")),e.checked?(e.closest(".tf-gallery-preview-item").classList.add("is-selected"),this.setIsEditing(!0)):(e.closest(".tf-gallery-preview-item").classList.remove("is-selected"),0===i&&this.setIsEditing(!1)),t===i?(this.updateSelectButton("unselect"),this.widget.querySelector(this.actions_dropdown_class+" .dropdown-menu li a.select").classList.add("is-hidden")):(this.updateSelectButton("select"),this.widget.querySelector(this.actions_dropdown_class+" .dropdown-menu li a.select").classList.remove("is-hidden"))},t.onSelectUnselectAllImages=function(e){var t=e.target.closest(".tf-gallery-actions-dropdown-action");t&&(e.preventDefault(),0!==this.getAllItems().length)&&("unselect"==(e=t.classList.contains("unselect")?"select":"unselect")?this.selectAllImages():this.unselectAllImages(),this.updateSelectButton(e))},t.select=function(e){e=e.querySelector(".select-item-checkbox input:not(:checked)");e.checked=!0,e.dispatchEvent(new Event("change",{bubbles:!0})),this.updateGalleryItem(e)},t.deselect=function(e){e=e.querySelector(".select-item-checkbox input:checked");e.checked=!1,e.dispatchEvent(new Event("change",{bubbles:!0})),this.updateGalleryItem(e)},t.selectAllImages=function(){var t=this;this.widget.querySelectorAll(".tf-gallery-preview-item:not(.is-selected)").forEach(function(e){t.select(e)})},t.unselectAllImages=function(){var t=this;this.widget.querySelectorAll(".tf-gallery-preview-item.is-selected").forEach(function(e){t.deselect(e)})},t.getAllItems=function(e){return this.widget.querySelectorAll(".tf-gallery-preview-item .select-item-checkbox input"+((e=void 0===e?!1:e)?":checked":""))},t.showItemInQueueMessage=function(e){e.querySelector(".tf-gallery-preview-in-queue").classList.add("is-visible")},t.hideItemInQueueMessage=function(e){e.querySelector(".tf-gallery-preview-in-queue").classList.remove("is-visible")},t.getAddButtonWrapper=function(){return this.widget.querySelector(".tf-gallery-actions .add-button")},t.enableAddButton=function(){var e=this.getAddButtonWrapper();e.classList.remove("disabled"),e.removeAttribute("title")},t.disableAddButton=function(){var e=this.getAddButtonWrapper();e.classList.add("disabled"),e.title=Joomla.JText._("NR_GALLERY_MANAGER_REACHED_FILES_LIMIT")},t.getGalleryMediaManagerModal=function(){return document.querySelector("#tf-GalleryMediaManager")},e}();


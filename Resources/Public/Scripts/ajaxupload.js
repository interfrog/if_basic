function upload(element,index = 0) {
    if (!element.files[index]) {
        return;
    }

    var newProgressBar = document.createElement('DIV');
    newProgressBar.className = 'progressBar';
    var newProgress = document.createElement('DIV');
    newProgress.className = 'progress';
    newProgress.innerHTML = '<span class="fileName">' + element.files[index]['name'] + '</span><span class="percent"></span>'
    newProgressBar.appendChild(newProgress);
    element.parentNode.querySelector('.progressArea').appendChild(newProgressBar);

    var data = new FormData();
    data.append('SelectedFile', element.files[index]);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4){

            try {
                var resp = JSON.parse(request.response);
                // element.parentNode.querySelector('.progressArea').removeChild(newProgressBar);
            } catch (e){
                var resp = JSON.parse(request.responseText);
                var error = {
                    status: 'error',
                    resp: request.responseText
                };
                console.log(error);
            }
            var uploadedFile = '/' + resp.fileName;
            var hiddenInput = document.getElementById(element.getAttribute('data-target'));
            hiddenInput.value += window.location.origin + uploadedFile + ', ';

            if (element.parentNode.querySelector('.previewImage')) {
                var previewImages = element.parentNode.querySelectorAll('.previewImage .image');
                if (previewImages[0].style.backgroundImage === '') {
                    previewImages[0].style.backgroundImage = 'url(' + uploadedFile + ')';
                } else {
                    var previewImage = document.createElement('DIV');
                    previewImage.className = 'image';
                    previewImage.style.backgroundImage = 'url(' + uploadedFile + ')';
                    element.parentNode.querySelector('.previewImage').appendChild(previewImage);
                }

                var hint = element.parentNode.querySelector('.previewImage .hint');
                hint.style.opacity = 0;

                newProgressBar.style.opacity = 0;
                newProgressBar.style.visibility = 'hidden';
                element.parentNode.querySelector('.progressArea').removeChild(newProgressBar);
            } else {
                newProgressBar.setAttribute('data-uploaded','true');
                newProgress.querySelector('.percent').innerHTML = 'abgeschlossen';
            }
            
            newIndex = index + 1;
            upload(element,newIndex);
            
        }
    };
    request.upload.addEventListener('progress', function(e){
        percent = parseInt(e.loaded/e.total * 100);
        newProgress.querySelector('.percent').innerHTML = percent;
        newProgress.style.width = percent + '%';
    }, false);

    request.open('POST', '?eID=ajaxupload');
    request.send(data);
}


var fileUploadFields = document.querySelectorAll('input.ajaxFileUpload');
for (var i =0;i < fileUploadFields.length; i++) {
    fileUploadFields[i].addEventListener('change', function(){
        if(this.files.length === 0){
            return;
        } else {
            upload(this);       
        }
    });
}

var uploadButtons = document.querySelectorAll('.ajaxUploadButton');
for (var i =0;i < uploadButtons.length; i++) {
    uploadButtons[i].addEventListener('click', function(event){
        event.preventDefault();
        var inputField = this.parentNode.querySelector('.ajaxFileUpload');
        inputField.click();
        return false;  
    });
}
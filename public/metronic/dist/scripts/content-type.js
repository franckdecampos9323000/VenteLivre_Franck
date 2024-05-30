// Function to show or hide the fields according to the choice in the select field
document.getElementById('content_type').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex].value;
    var divText = document.getElementById('div_text');
    var divImage = document.getElementById('div_image');
    var divVideo = document.getElementById('div_video');
    var divFile = document.getElementById('div_file');
    var divComment = document.getElementById('comment');

    // Reset all divs to be hidden
    divText.style.display = 'none';
    divImage.style.display = 'none';
    divVideo.style.display = 'none';
    divFile.style.display = 'none';
    divComment.style.display = 'none';

    // Show the selected div based on the selected option
    if (selectedOption === 'text') {
        divText.style.display = 'block';
        divImage.style.display = 'none';
        divVideo.style.display = 'none';
        divFile.style.display = 'none';
        divComment.style.display = 'none';
    } else if (selectedOption === 'image') {
        divImage.style.display = 'block';
        divComment.style.display = 'block';
        divText.style.display = 'none';
        divVideo.style.display = 'none';
        divFile.style.display = 'none';
    } else if (selectedOption === 'video') {
        divVideo.style.display = 'block';
        divComment.style.display = 'block';
        divText.style.display = 'none';
        divImage.style.display = 'none';
        divFile.style.display = 'none';
    } else if (selectedOption === 'file') {
        divFile.style.display = 'block';
        divComment.style.display = 'block';
        divText.style.display = 'none';
        divImage.style.display = 'none';
        divVideo.style.display = 'none';
    } else {
        divText.style.display = 'none';
        divImage.style.display = 'none';
        divVideo.style.display = 'none';
        divFile.style.display = 'none';
        divComment.style.display = 'none';

    }
});

/*
$(document).ready(function() {
      $("#content_type").change(function() {
        var content_type = $(this).val();
        if (content_type == "text") {
          $("#text").prop("required", true);
          $("#image, #file, #video, comment").prop("required", false);
        } else if (content_type == "image") {
          $("#image").prop("required", true);
          $("#comment").prop("required", true);
          $("#text, #file, #video").prop("required", false);
        } else if (content_type == "file") {
          $("#file").prop("required", true);
          $("#comment").prop("required", true);
          $("#text, #image, #video").prop("required", false);
        } else if (content_type == "video") {
          $("#video").prop("required", true);
          $("#comment").prop("required", true);
          $("#text, #image, #file").prop("required", false);
        } else {
          $("#text, #image, #file, #video, #comment").prop("required", false);
        }
      });
    });
*/

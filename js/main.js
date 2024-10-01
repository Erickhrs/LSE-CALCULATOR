$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
  $('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  $('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

    

});


const banner = document.getElementById('backgroundImg');

banner.style.backgroundImage = "url('images/bg_" + (Math.floor(Math.random() * 15) + 1) + ".jpg')";

	
var base_url = $('#base_url').val();

$(document).ready(function () {
	// When the user scrolls down 50px from the top of the document, show the button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('.btn-back-to-top').fadeIn();
		} else {
			$('.btn-back-to-top').fadeOut();
		}
	});

	// When the user clicks on the button, scroll to the top of the document
	$('.btn-back-to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});

//Date Range picker
$(function () {
	$('.tanggal').datetimepicker({
		format: 'DD-MMM-YYYY',
		maxDate: new Date(),
		useCurrent: false,
		allowInputToggle: true,
	});

	$('.tanggal-back-years').datetimepicker({
		format: 'DD-MMM-YYYY',
		minDate: new Date(new Date().getFullYear() - 5, new Date().getMonth(), new Date().getDay()),
		maxDate: new Date(),
		useCurrent: false,
		allowInputToggle: true,
	});

	// Date picker
	$('#reservationdate').datetimepicker({
		format: 'L'
	});

	// Date and time picker
	$('#reservationdatetime, #tgl-jam-dihubungi, #tgl-order').datetimepicker({
		icons: {
			time: 'far fa-clock'
		}
	});

	// Date range picker
	$('#reservation').daterangepicker()
	// Date range picker with time picker
	$('#reservationtime').daterangepicker({
		timePicker: true,
		timePickerIncrement: 30,
		locale: {
			format: 'MM/DD/YYYY hh:mm A'
		}
	});

	// Date range as a button
	$('#daterange-btn').daterangepicker({
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			},
			startDate: moment().subtract(29, 'days'),
			endDate: moment()
		},
		function (start, end) {
			$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
		}
	)

	// Timepicker
	$('#timepicker').datetimepicker({
		format: 'LT'
	});

});

//Mask NPWP
$(function () {
	$('.npwp').mask("99.999.999.9-999.999");
});

//Input only number
$('.inp-digit').keypress(function (e) {
	if ($.isNumeric($(this).attr('max'))) {
		if (e.which == 8 || e.which == 0) {

		} else if (e.which < 48 || e.which > 57 || $(this).val().length === parseInt($(this).attr('max'))) {
			return false;
		} else if ($(this).val().length === 0 && e.which === 32) {
			return false;
		}
	} else {
		if (e.which == 8 || e.which == 0) {

		} else if (e.which < 48 || e.which > 57) {
			return false;
		} else if ($(this).val().length === 0 && e.which === 32) {
			return false;
		}
	}
});

$(".inp-digit").bind("paste", function (e) {
	e.preventDefault();
});

//Input only alphabet
$('.inp-alphabetical').keypress(function (e) {
	if (e.which !== 8 && e.which !== 0 && e.which !== 32 && (e.which < 96 || e.which > 122) && (e.which < 65 || e.which > 90)) {
		return false;
	} else if ($(this).val().length === 0 && e.which === 32) {
		return false;
	} else {}
});

$(".inp-alphabetical").bind("paste", function (e) {
	e.preventDefault();
});

$('.tanggal').bind("keydown", function (e) {
	e.preventDefault();
});

$('.tanggal').bind("paste", function (e) {
	e.preventDefault();
});

function validasiEmail() {
	var rs = document.forms["formInput"]["email"].value;
	var atps = rs.indexOf("@");
	var dots = rs.lastIndexOf(".");
	if (atps < 1 || dots < atps + 2 || dots + 2 >= rs.length) {
		alert("Alamat email tidak valid.");
		return false;
	} else {
		alert("Alamat email valid.");
	}
}

//Prevent input on date field
$('.disable-input-date').on('keydown', function (e) {
	e.preventDefault();
});
$('.disable-input-date').bind("paste", function (e) {
	e.preventDefault();
});

function field_disabled() {
	$('.field-disabled').val('');
	$('.field-disabled').prop('disabled', true);
}

function field_enabled() {
	$('.field-disabled').val('');
	$('.field-disabled').prop('disabled', false);
}

function alert_confirm(message, callback) {
	$('#modal-alert').modal('show');
	$('#modal-alert-title').html('Konfirmasi');
	$('#btn-yes').show();
	$('#btn-yes').prop('disabled', false);
	$('#btn-yes').html('Yes');
	$('#btn-no').html('No');
	$('#btn-ok').hide();
	$('#modal-alert-message').html(message);
	$('#modal-alert-icon').removeClass('fa-info-circle').removeClass('fa-exclamation-triangle').removeClass('fa-times-circle').addClass('fa-question-circle');
	$('.fa-question-circle').css('color', '#3c763d');
	$('#btn-yes').trigger('focus');
	$('#btn-yes').off('click').on('click', function () {
		$('#modal-alert').modal('hide');
		if (typeof callback === 'function') {
			callback();
		}
	});
	$('#btn-no').off('click').on('click', function () {
		$('#modal-alert').modal('hide');
	});
}

function alert_warning(message, callback) {
	$('.modal-backdrop').css('display', 'none');
	$('#modal-alert').modal('show');
	$('#modal-alert-title').html('Warning');
	$('#modal-alert-message').html(message);
	$('#btn-yes').hide();
	$('#btn-no').hide();
	$('#btn-ok').show();
	$('#btn-ok').prop('disabled', false);
	$('#btn-ok').html('OK');
	$('#modal-alert-icon').removeClass('fa-info-circle').removeClass('fa-times-circle').removeClass('fa-question-circle').addClass('fa-exclamation-triangle');
	$('.fa-exclamation-triangle').css('color', '#e8e158');
	$('#btn-ok').trigger('focus');
}

function alert_info(message, callback) {
	$('#modal-alert').modal('show');
	$('#modal-alert-title').html('Info');
	$('#btn-yes').hide();
	$('#btn-no').hide();
	$('#btn-ok').show();
	$('#btn-ok').prop('disabled', false);
	$('#btn-ok').html('OK');
	$('#modal-alert-message').html(message);
	$('#modal-alert-icon').removeClass('fa-exclamation-triangle').removeClass('fa-times-circle').removeClass('fa-question-circle').addClass('fa-info-circle')
	$('.fa-info-circle').css('color', '#31708f');
	$('#btn-ok').trigger('focus');
}

function alert_error(message, callback) {
	$('#modal-alert').modal('show');
	$('#modal-alert-title').html('Error');
	$('#btn-yes').hide();
	$('#btn-no').hide();
	$('#btn-ok').show();
	$('#btn-ok').prop('disabled', false);
	$('#btn-ok').html('OK');
	$('#modal-alert-message').html(message);
	$('#modal-alert-icon').removeClass('fa-info-circle').removeClass('fa-exclamation-triangle').removeClass('fa-question-circle').addClass('fa-times-circle')
	$('.fa-times-circle').css('color', '#a94442');
	$('#btn-ok').trigger('focus');
}

// Trigger button next & previous TAB
$('.nextTab').click(function () {
	$('.nav-tabs > .nav-item > .active').parent().next('li').find('a').trigger('click');
});
$('.previousTab').click(function () {
	$('.nav-tabs > .nav-item > .active').parent().prev('li').find('a').trigger('click');
});

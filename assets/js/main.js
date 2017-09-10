function parseDate(date_str) {
	var ar = date_str.split("-");

	return {"day": ar[2], "month": ar[1], "year": ar[0]};
}

function countMonth(date_obj) {
	var months = 0;

	var today = new Date();

	if (today.getFullYear() == date_obj.year) {
		months = today.getMonth() + 1 - date_obj.month;
	} else {
		var years = today.getFullYear() - date_obj.year - 1;
		months = (years * 12) + (12 - date_obj.month) + (today.getMonth() + 1)
	}

	return months;
}

function calculating_capitalization(sum, percent_month, month) {
	sum = sum + sum/100 * percent_month;
	sum = Math.round(sum * 100) / 100;
	month--;
	if (month == 0) {
		return sum;
	} else {
		return calculating_capitalization(sum, percent_month, month);
	}
}


function printTableBankBooks(bank_books) {
	$('#bank-books tbody tr').remove();

	$.each(bank_books, function( index, value ) {
		addRow(value)
	});
}


function printUserInfo(user) {
	$("#user-img").attr('src', 'storage/user_image/' + user.id + '.jpg');

	
	$("#birthday").text(user.birthday);

	$("#passport_date_issue").text(user.passport_date_issue);

	$("#passport_department_id").text(user.passport_department_id);
	$("#passport_department_name").text(user.passport_department_name);

	$("#passport_id").text(user.passport_id);

	$("#passport_series").text(user.passport_series);
}


function addRow(data) {
    var table = $('#bank-books');

    var row = document.createElement('tr');;

    var op_date = parseDate(data.opening_date);

   	row.insertCell(0).innerHTML = data.id;
   	row.insertCell(1).innerHTML = op_date.day + '.' + op_date.month + '.' + op_date.year;
   	row.insertCell(2).innerHTML = data.down_payment;
   	row.insertCell(3).innerHTML = data.percent_rate;
   	
   	var	percent_month = parseFloat(data.percent_rate)/12;
   	var count_month = countMonth(op_date);

   	row.insertCell(4).innerHTML = calculating_capitalization(parseFloat(data.down_payment), percent_month, count_month);

 	table.append(row);
}


function getUser(user_id) {
	$.ajax({
		type: "POST",
		url: "ajax.php",
		dataType: "json",
		data: {
			'mod': 'user',
			'go': 'get',
			'id': user_id,
		},
		success: function( data ) {
			printUserInfo(data);
		}
	});
}


function getBankBooks(user_id) {
	$.ajax({
		type: "POST",
		url: "ajax.php",
		dataType: "json",
		data: {
			'mod': 'bank-books',
			'go': 'get',
			'user_id': user_id,
		},
		success: function( data ) {
			printTableBankBooks(data.bank_books);
		}
	});
}

$(function() {
	$("#users li a").on('click', function() {
		$("main").show();

		$( "#users li a.active" ).removeClass( "active" );
		$( this ).addClass( "active" );
		

		var user_id = $(this).attr('user-id');
		getBankBooks(user_id);
		getUser(user_id);

		$("#user-name").text($(this).text());

	})
});
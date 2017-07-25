/*!

 =========================================================
 * Paper Bootstrap Wizard - v1.0.2
 =========================================================

 * Product Page: https://www.creative-tim.com/product/paper-bootstrap-wizard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/paper-bootstrap-wizard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

// Paper Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;

        $(document).ready(function(){

            /*  Activate the tooltips      */
            $('[rel="tooltip"]').tooltip();

            // Code for the Validator
            var $validator = $('.wizard-card form').validate({
        		rules: {
                    //BIODATA VALIDATION

        		    company: {
        		      required: true,
        		      minlength: 3
        		    },
                    pic: {
                        required: true,
                        minlength:3
                    },
                    phone: {
                        required: true,
                        number: true,
                        rangelength: [8, 14]
                    },
                    email: {
                        required: true,
                        customemail:true
                    },
                    address: {
                        required: true,
                        minlength: 15
                    },
                    explanation: {
                        required: true,
                        minlength: 15
                    },
                    //END OF BIODATA VALIDATION
                },
        	});

             //addMethod for validation SELECT Option
             jQuery.validator.addMethod('pilihan-wajib', function (value) {
                    return (value != '0');
                }, "Pilih Jawaban Kamu..");

            //validate emaiil
            jQuery.validator.addMethod("customemail", function(value, element) {
                return this.optional(element) ||/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/.test(value);
                }, "Tolong masukan Email yang valid..");

            //custom pesan
            $('input[type="text"]').each(function() {
                $(this).rules('add', {
                    messages: {
                        required: "Field ini wajib diisi..",
                        minlength: "Data terlalu singkat..",
                        maxlength: "Data terlalu panjang..",
                        number: "Format nomor tidak sesuai..",
                        url: "Format URL tidak sesuai..",
                        date: "Format tanggal tidak sesuai.."
                    }
                })
            });

            $('input[type="email"]').each(function() {
                $(this).rules('add', {
                    messages: {
                        required: "Field ini wajib diisi..",
                        email: "Format Email tidak sesuai..",
                    }
                })
            });

            $('textarea').each(function() {
                $(this).rules('add', {
                    messages: {
                        required: "Field ini wajib diisi..",
                        minlength: "Data terlalu singkat.."
                    }
                })
            });

            // Wizard Initialization
          	$('.wizard-card').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'nextSelector': '.btn-next',
                'previousSelector': '.btn-previous',

                onNext: function(tab, navigation, index) {
                	var $valid = $('.wizard-card form').valid();
                	if(!$valid) {
                		$validator.focusInvalid();
                		return false;
                	}
                },

                onInit : function(tab, navigation, index){

                  //check number of tabs and fill the entire row
                  var $total = navigation.find('li').length;
                  $width = 100/$total;

                  navigation.find('li').css('width',$width + '%');

                },

                onTabClick : function(tab, navigation, index){

                    var $valid = $('.wizard-card form').valid();

                    if(!$valid){
                        return false;
                    } else{
                        return true;
                    }

                },

                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var $wizard = navigation.closest('.wizard-card');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $($wizard).find('.btn-next').hide();
                        $($wizard).find('.btn-finish').show();
                    } else {
                        $($wizard).find('.btn-next').show();
                        $($wizard).find('.btn-finish').hide();
                    }

                    //update progress
                    var move_distance = 100 / $total;
                    move_distance = move_distance * (index) + move_distance / 2;

                    $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
                    //e.relatedTarget // previous tab

                    $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

                }
	        });


                // Prepare the preview for profile picture
                $("#wizard-picture").change(function(){
                    readURL(this);
                });

                $('[data-toggle="wizard-radio"]').click(function(){
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('[type="radio"]').removeAttr('checked');
                    $(this).find('[type="radio"]').attr('checked','true');
                    console.log('--------', this);
                    //console.log(test);
                });

                $('[data-toggle="wizard-checkbox"]').click(function(){
                    if( $(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).find('[type="checkbox"]').removeAttr('checked');
                    } else {
                        $(this).addClass('active');
                        $(this).find('[type="checkbox"]').attr('checked','true');
                    }
                });

                $('.set-full-height').css('height', 'auto');

            });



         //Function to show image before upload

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


//type sponsor

/**********************************************************************************/
/**********************************************************************************/
/**********  Ini untuk kondisi default tampilan kalau tidak memillih **************/
$("#p-inkind").hide();
$("#p-mediapartner").hide();

$("#p-benefit-inkind").hide();
$("#p-benefit-mediapartner").hide();

$("#form-sponsor-judul").html('4. Formulir Sponsorship Fresh Money');
/**********  Ini untuk kondisi default tampilan kalau tidak memillih **************/
/**********************************************************************************/
/**********************************************************************************/

$('[data-toggle="wizard-radio"]').click(function(){
    //get value radio button
    var selection = $(this).find('[type="radio"]').val();
    $("#sponsorship-types").val(selection); //--> get value room for hidden value
    //console.log(selection);
    switch(selection){
    case '1':
        $("#p-freshmoney").show();
        $("#p-inkind").hide();
        $("#p-mediapartner").hide();

        $("#p-benefit-freshmoney").show();
        $("#p-benefit-inkind").hide();
        $("#p-benefit-mediapartner").hide();

        $("#form-sponsor-judul").html('Formulir Sponsorship Fresh Money');
        break;

    case '2':
        $("#p-freshmoney").hide();
        $("#p-inkind").show();
        $("#p-mediapartner").hide();

        $("#p-benefit-freshmoney").hide();
        $("#p-benefit-inkind").show();
        $("#p-benefit-mediapartner").hide();

        $("#form-sponsor-judul").html('Formulir Sponsorship In-Kind');
        break;

    case '3':
        $("#p-freshmoney").hide();
        $("#p-inkind").hide();
        $("#p-mediapartner").show();

        $("#p-benefit-freshmoney").hide();
        $("#p-benefit-inkind").hide();
        $("#p-benefit-mediapartner").show();

        $("#form-sponsor-judul").html('Formulir Media Partner');
        break;

    default:
        $("#p-freshmoney").hide();
        $("#p-inkind").hide();
        $("#p-mediapartner").hide();

        $("#p-benefit-freshmoney").hide();
        $("#p-benefit-inkind").hide();
        $("#p-benefit-mediapartner").hide();
    }
});

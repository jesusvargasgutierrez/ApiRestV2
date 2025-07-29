$( document ).ready(function() {

  $('.add_ingredients').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.ingredients_recipe_div').find('.ingredients_recipe');

    var Tablebody = '<tr>'+
      '<td style="width:100%"><input type="text" name="ingredient[]" require class="border border-secondary form-control"/></td>'+
      '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
    '</tr>';

    $(tablaresult).append(Tablebody);
  });

  $('.add_instructions').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.instructions_recipe_div').find('.instructions_recipe');

    var Tablebody = '<tr>'+
      '<td style="width:100%"><input type="text" name="instruction[]" multiple="multiple" require class="border border-secondary form-control"/></td>'+
      '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
    '</tr>';

    $(tablaresult).append(Tablebody);
  });

  $('.add_blogs').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.blogs_post_div').find('.blogs_post');

    var uidselect = uuidv4().substring(0, 2);

    var Tablebody = '<tr>'+
      '<td style="width:100%">'+
        '<select name="id_blog[]" class="select-blog-'+uidselect+' form-control"></select>'+
      '</td>'+
      '<td>'+
        '<button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button>'+
      '</td>'+
    '</tr>';

    $(tablaresult).append(Tablebody);

    getblogs(uidselect);
  });

  function getblogs(uid){
    $('.select-blog-'+uid).select2({
        placeholder: "Selecciona blog",
        "language": {
          "noResults": function(){
             return "No se encontró el blog";
          }
        },
        escapeMarkup: function (markup) {
          return markup;
        },
        ajax: {
          url: '/ws/getblogs',
          delay: 250,
          data: function (params) {
            var query = {
              q: params.term
            }
            return query;
          }
        }
    });
  }

  $("body").on("click", "#remove-register", function() {
    $(this).closest("tr").remove();
  });

  $("body").on("click",'.remove-register-instruction',function(e){
    e.stopPropagation();
    var id = $(this).data('id');

    var params = {
      id
    }

    axios
    .get('/ws/remove_instruction/',{ params })
    .then(response => {
        toastr.success("instrucción eliminada");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
  });

  $("body").on("click",'.remove-register-ingredient',function(e){
    e.stopPropagation();
    var id = $(this).data('id');

    var params = {
      id
    }

    axios
    .get('/ws/remove_ingredient',{ params })
    .then(response => {
        toastr.success("ingrediente eliminado");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
 });

  $("body").on("click",'.remove-register-postblog',function(e){
    e.stopPropagation();
    var id = $(this).data('id');

    var params = {
      id
    }

    axios
    .get('/ws/remove_postblog',{ params })
    .then(response => {
        toastr.success("Entrada eliminada");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
  });

  $(".stop_propagation").click(function(e){
    e.stopPropagation();
  })

  $('.add_question').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.questions_div').find('.question_table');

    var uidselectqs = uuidv4().substring(0, 2);
    //var uidselect = uuidv4().substring(0, 2);

    var Tablebody = '<tr>'+
      '<td style="width:50%">'+
        '<input type="text" name="questions[]" class="question_text form-control" />'+
      '</td>'+
      '<td style="width:40%">'+
        '<select name="id_type[]" data-select="0" class="select_options select-type-'+uidselectqs+' form-control">'+
          '<option value="0">-- Selecciona una option --</option>'+
          '<option value="1">Opciones</option>'+
          '<option value="2">Texto</option>'+
          '<option value="3">Puntaje</option>'+
        '</select>'+
        '<input type="hidden" name="id_selected_q[]" class="id_selected_q" />'+
      '</td>'+
      '<td>'+
        '<button class="btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button>'+
      '</td>'+
    '</tr>';

    $(tablaresult).append(Tablebody);

    //getblogs(uidselect);
  });

  //$('body').on('click','.add_options',function(e){
  //  $('.idselecttemp').val($('.idselecttemp').val() + 1);
  //  
  //  $(`#options_select_sv`).modal();
  //});

  $("body").on("change",'.tablequestion td',function(e){
    var selection = $(this).closest('tr').find('select.select_options').val();
    
    var question = $(this).closest('tr').find('input.question_text').val();

    if(!question) {
      toastr.warning("Agregue una descripcion a la pregunta");
      $(this).closest('tr').find('select.select_options').val(0);
      return false;
    }

    if (selection == 1) {
      //var select_option = $(this).closest('tr').find('select.select_options').data('select');

      var params = {
        question
      }

      axios
      .get('/ws/add_options_question',{ params })
      .then(response => {
          $('.id_question_select').val(response.results.id_survey_question);
          $(this).closest('tr').find('input.id_selected_q').val(response.results.id_survey_question);
          //toastr.success("Pregunta agregada correctamente");
          $(`#options_select_sv`).modal();
      })
      .catch(response => console.log(response));
    }else{
      var id_select_q = $(this).closest('tr').find('input.id_selected_q').val();
      if (id_select_q) {
          var params = {
            id: id_select_q
          }

          axios
          .get('/ws/remove_question_row/', { params })
          .then(response => {
              $(this).closest('tr').find('input.id_selected_q').val("0");
              toastr.success("Pregunta eliminada");
          })
          .catch(response => console.log(response));
      }
    }
  });

  function uuidv4() {
    return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
      (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
    );
  }

  tinymce.init({
    selector: 'textarea#tiny',
    toolbar: "undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent",
    font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
    content_style: "@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap'); body { font-family: Oswald; }",
  });

  $('.add_images_main').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.imagenes_div').find('.images_table');
    var quantitytr = $(this).parents('div.imagenes_div').find('.images_table tr');
    var Tablebody = '';

    if (quantitytr.length <= 2) {
      for (var i = quantitytr.length; i < 3; i++) {
        var change = '(283,430,\'file-main'+i+'\',\'file-main2\') ';

        Tablebody = '<tr>'+
          '<td><input type="file" name="image_main[]" id="file-main'+i+'" onchange="return Uploadclass'+ change +'" require class="file-main'+i+' border border-secondary form-control"/></td>'+
          '<td><input value="" placeholder="Corte" name="corte[]" class="border border-secondary form-control"/></td>'+
          '<td><input value="" placeholder="Descripcion" name="description_main[]" require class="border border-secondary form-control"/></td>'+
          '<td><input value="" placeholder="Minutos y porciones" name="minutos_porciones[]" class="border border-secondary form-control"/></td>'+
          '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
        '</tr>';

        $(tablaresult).append(Tablebody);
      }
    }else{
      toastr.warning('No se permiten más de 3 imágenes');
    }

    /*if (quantitytr.length <= 2) {
      Tablebody = '<tr>'+
        '<td><input type="file" name="image_main[]" require class="border border-secondary form-control"/></td>'+
        '<td><input name="corte[]" class="border border-secondary form-control"/></td>'+
        '<td><input name="description_main[]" require class="border border-secondary form-control"/></td>'+
        '<td><input name="minutos_porciones[]" class="border border-secondary form-control"/></td>'+
        '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
      '</tr>';

      $(tablaresult).append(Tablebody);
    }else{
      toastr.warning('No se permiten mas de 3 imagenes');
    }*/
  });

  $('.add_videos').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.videos_div').find('.videos_table');
    var quantitytr = $(this).parents('div.videos_div').find('.videos_table tr');
    var Tablebody = '';

    if (quantitytr.length <= 2) {
      for (var i = quantitytr.length; i < 3; i++) {
        Tablebody = '<tr>'+
          '<td><input value="" name="video[]" require class="border border-secondary form-control"/></td>'+
          '<td><input value="" name="description_video[]" class="border border-secondary form-control"/></td>'+
          '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
        '</tr>';

        $(tablaresult).append(Tablebody);
      }
    }else{
      toastr.warning('No se permiten más de 3 videos');
    }

    /*if (quantitytr.length <= 2) {
      Tablebody = '<tr>'+
        '<td><input name="video[]" require class="border border-secondary form-control"/></td>'+
        '<td><input name="description_video[]" class="border border-secondary form-control"/></td>'+
        '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
      '</tr>';

      $(tablaresult).append(Tablebody);
    }else{
      toastr.warning('No se permiten mas de 3 imagenes');
    }*/
  });

  $('.add_cortes').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.imagenes_cortes_div').find('.imagenes_cortes');
    var quantitytr = $(this).parents('div.imagenes_cortes_div').find('.imagenes_cortes tr');
    var Tablebody = '';

    if (quantitytr.length <= 7) {
      for (var i = quantitytr.length; i < 8; i++) {
          var change = '(264,324,\'file-main'+i+'\',\'file-main2\') ';

        Tablebody = '<tr>'+
          '<td><input type="file" name="image_corte[]" id="file-main'+i+'" onchange="return Uploadclass'+ change +'" require class="file-main'+i+' border border-secondary form-control"/></td>'+
          '<td><input value="" type="text" name="description_corte[]" require class="border border-secondary form-control"/></td>'+
          '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
        '</tr>';

        $(tablaresult).append(Tablebody);
      }
   }else{
      toastr.warning('No se permiten más de 8 imágenes');
    }

    /*if (quantitytr.length <= 7) {
      Tablebody = '<tr>'+
        '<td><input type="file" name="image_corte[]" require class="border border-secondary form-control"/></td>'+
        '<td><input name="description_corte[]" require class="border border-secondary form-control"/></td>'+
        '<td><button class="btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
      '</tr>';

      $(tablaresult).append(Tablebody);
    }else{
      toastr.warning('No se permiten mas de 8 imagenes');
    }*/
  });

  $("body").on("click",'.remove-register-main-image',function(e){
    e.stopPropagation();
    var id_grill = $(this).data('id_grill');
    var id_grill_image_main = $(this).data('id_grill_image_main');

    var params = {
      id_grill_image_main,
      id_grill
    }

    axios
    .get('/ws/remove_main_image',{ params })
    .then(response => {
        toastr.success("Imágen eliminada");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
  });

  $("body").on("click",'.btn-add-options',function(e){
    e.stopPropagation();

    var options = $('.area_select_options').val();
    var id_question = $('.id_question_select').val();

    var params = {
      options,
      id_question
    }

    if (!options) {
      toastr.warning("Escriba al menos una opcion");
      return false;
    }

    axios
    .get('/ws/add_options_select_sv',{ params })
    .then(response => {
        toastr.success("Opciones agregadas correctamente");
        $('.area_select_options').val('');
        $(`#options_select_sv`).modal('hide');
    })
    .catch(response => console.log(response));
 });

$("body").on("click",'.remove_question_row',function(e){
    var id = $(this).data('id');

    var params = {
      id
    }

    axios
    .get('/ws/remove_question_row/', { params })
    .then(response => {
        toastr.success("Pregunta eliminada");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
});

 $("body").on("click",'.remove-register-video',function(e){
    e.stopPropagation();
    var id_grill = $(this).data('id_grill');
    var id_grill_videos = $(this).data('id_grill_videos');

    var params = {
      id_grill_videos,
      id_grill
    }

    axios
    .get('/ws/remove_video',{ params })
    .then(response => {
        toastr.success("Video eliminado");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
 });

  $("body").on("click",'.remove-register-corte-image',function(e){
    e.stopPropagation();
    var id_grill = $(this).data('id_grill');
    var id_grill_corte_image = $(this).data('id_grill_corte_image');

    var params = {
      id_grill_corte_image,
      id_grill
    }

    axios
    .get('/ws/remove_corte_image',{ params })
    .then(response => {
        toastr.success("Imágen eliminada");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
 });

 $("body").on("click",'.remove_main_landing_image',function(e){
    e.stopPropagation();
    var id_landing_main_images = $(this).data('id_landing_image_main');
    var id_landing_page = $(this).data('id_landing_page');


    var params = {
      id_landing_main_images,
      id_landing_page
    }

    axios
    .get('/ws/remove_main_landing_image',{ params })
    .then(response => {
        toastr.success("Imágen eliminada");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));

    $('.add_images_landing').removeClass('d-none');
 });

});

  const dimensions = {
    blogs : { width:473, height:316, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 473 x 316 píxeles</span>', active: 0 },
    category : { width:59, height:56, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 59 x 56 píxeles</span>', active: 0 },
    dificulties : { width:19, height:19, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 19 x 19 píxeles</span>', active: 0 },
    recipes : { 
                cover: { width:337, height:295, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 58 x 55 píxeles</span>', active: 0 },
                thumbnail: { width:337, height:295, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 337 x 295 píxeles</span>', active: 0 },
                miniature: { width:100, height:100, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 58 x 100 píxeles</span>', active: 0 }
              },
    posts : { width:475, height:311, msg:' <span class="text-danger"> * Las dimensiones deben ser a partir de 58 x 25 píxeles</span>', active: 0 },
    grill : { 
                main: { width:430, height:283, msg:' <span class="text-danger" style="font-size:8pt"> * Las dimensiones deben ser a partir de 430 x 283 píxeles</span>', active: 0 },
                cortes: { width:324, height:264, msg:' <span class="text-danger" style="font-size:8pt"> * Las dimensiones deben ser a partir de 324 x 264 píxeles</span>', active: 0 }
            },
    consumelocal : { width:814, height:683, msg:' <span class="text-danger" style="font-size:8pt"> * Las dimensiones deben ser a partir de 814 x 683 píxeles</span>', active: 0 },
    pageflip : { width:646, height:856, msg:' <span class="text-danger" style="font-size:8pt"> * Las dimensiones deben ser a partir de 646 x 856 píxeles y su peso maximo de 1MB</span>', active: 0 }
  }

  function validateSize(input) {
    const fileSize = input.files[0];

    //console.log(fileSize.size);

    var size = fileSize.size / 1024;

    if (size > 1) {
      alert('El tamaño del archivo debe ser maximo 1 MB');
      input.value = '';
    }
  }

  function Upload(imgheight, imgwidth, isactive) {
    var fileUpload = document.getElementById("upload-file");
 
    if (isactive) {
      var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
      if (regex.test(fileUpload.value.toLowerCase())) {
          if (typeof (fileUpload.files) != "undefined") {
              var reader = new FileReader();
              reader.readAsDataURL(fileUpload.files[0]);
              reader.onload = function (e) {
                  var image = new Image();
   
                  image.src = e.target.result;
                         
                  image.onload = function () {
                      var height = this.height;
                      var width = this.width;

                      if (height < imgheight || width < imgwidth) {
                          $('.dimensions-images-txt').html('No cumple con el tamaño requerido ');
                          
                          $('.btn-sbmt').attr('disabled','disabled');
                          return false;
                      }
                      $('.dimensions-images-txt').html('');

                      $('.btn-sbmt').removeAttr('disabled');
                      return true;
                  };
   
              }
          } else {
              alert("This browser does not support HTML5.");
              return false;
          }
      } else {
          alert("Please select a valid Image file.");
          return false;
      }
    }
  }

var counter=0;
var classbefore = '';

function Uploadclass(imgheight, imgwidth, classname, labelclass, isactive) {
    var fileUpload = document.getElementById(classname);

    if (isactive) {
      var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
      if (regex.test(fileUpload.value.toLowerCase())) {
          if (typeof (fileUpload.files) != "undefined") {
              var reader = new FileReader();
              reader.readAsDataURL(fileUpload.files[0]);
              reader.onload = function (e) {
                  var image = new Image();
   
                  image.src = e.target.result;
                         
                  image.onload = function () {
                      var height = this.height;
                      var width = this.width;

                      console.log('imw'+width);
                      console.log('imh'+height);
                      console.log('ch'+imgheight);
                      console.log('cw'+imgwidth);

                      if (height < imgheight || width < imgwidth) {
                          toastr.warning('No cumple con el tamaño requerido ');
                          //$('.'+labelclass).html('No cumple con el tamaño requerido ');
                          $('.btn-sbmt').attr('disabled','disabled');
                          counter=counter+1;
                          return false;
                      } else{
                        if (counter != 0) {
                          counter=counter-1;
                        }
                      }

                      $('.'+labelclass).html('');

                      if (counter==0 || counter<0){
                        $('.btn-sbmt').removeAttr('disabled');
                        return true;
                      }
                  };
              }
          } else {
              alert("This browser does not support HTML5.");
              return false;
          }
      }else {
          alert("Please select a valid Image file.");
          return false;
      }
    }
}

$('.add_images_landing').click(function(e){
    e.preventDefault();
    var tablaresult = $(this).parents('div.imagenes_landing_div').find('.images_landing_table');
    var landingtype = ['Encabezado','Cuerpo','Pie','Otro'];
    var Tablebody = '';

    var typeslanding = '';

    for (var i = 0; i < landingtype.length; i++) {
      typeslanding += '<option value="'+(i + 1)+'">'+landingtype[i]+'</option>';
    }

    var change = '(683,814,\'file-main'+i+'\',\'file-main2\',1) ';

    Tablebody = '<tr>'+
      '<td><input type="file" name="image_main[]" id="file-main'+i+'" onchange="return Uploadclass'+ change +'" require class="file-main1'+' border border-secondary form-control"/></td>'+
      '<td><button class="btn btn remove-register-landing" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
    '</tr>';

    $(tablaresult).append(Tablebody);

    $(this).addClass('d-none');
});

$("body").on("click", ".remove-register-landing", function() {
  $(this).closest("tr").remove();
  $('.add_images_landing').removeClass('d-none');
});

$('.id_page_type').change(function(e){
  var type_video=$(this).val();

  if (type_video==2){
    $('.control_video').addClass('d-none');
    $('.control_text').addClass('d-none');
  }
  else
  {
    $('.control_video').removeClass('d-none');
    $('.control_text').removeClass('d-none');
  }
})

const maxinput = {
  recipes : { string: 50, active: 1 },
  categories : { string: 50, active: 1 },
  categoriesvive : { string: 50, active: 1 },
  subcategories : { string: 50, active: 1 },
  difficulties : { string: 50, active: 1 },
  post : { string: 50, active: 1 },
}

function inputmaxstring(max,isactive){
  var index = 0;
  $('.divmain input[type="text"]').each(function(e){
      var cl = 'max'+index;

      var datanetwork = $(this).data('network');

      if (isactive && !datanetwork) {
        $(this).attr('maxLength',max);
        $(this).addClass("max"+index);
        $(this).attr('onkeypress',"keytextt("+isactive+","+max+",'max"+index+"')");
      }
      index++;
  });
}

function keytextt(act,ms,e){
  var cla = '.'+e;
  var length = $(cla).val().length;
  var maxlength = ms;

  if (length >= maxlength && window.getSelection() == "") {
    alert('La longitud maxima es: '+maxlength);
  }
}

function mainadd(){
    var tablaresult = $(this).parents('div.imagenes_div').find('.images_table');
    var quantitytr = $(this).parents('div.imagenes_div').find('.images_table tr');
    var Tablebody = '';

    for (var i = 0; i < 3; i++) {
      var change = '(283,430,\'file-main'+i+'\',\'file-main2\') ';

      Tablebody += '<tr>'+
        '<td><input type="file" name="image_main[]" id="file-main'+i+'" onchange="return Uploadclass'+ change +'" require class="file-main'+i+' border border-secondary form-control"/></td>'+
        '<td><input type="text" value="" placeholder="Corte" name="corte[]" class="border border-secondary form-control"/></td>'+
        '<td><input type="text" value="" placeholder="Descripcion" name="description_main[]" require class="border border-secondary form-control"/></td>'+
        '<td><input type="text" value="" placeholder="Minutos y porciones" name="minutos_porciones[]" class="border border-secondary form-control"/></td>'+
        '<td><button class="d-none btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
      '</tr>';
    }

    $('.images_table').html(Tablebody);
}

function videosgrill(){
    var tablaresult = $(this).parents('div.videos_div').find('.videos_table');
    var quantitytr = $(this).parents('div.videos_div').find('.videos_table tr');
    var Tablebody = '';

    for (var i = 0; i < 3; i++) {
      Tablebody += '<tr>'+
        '<td><input type="text" value="" placeholder="Enlace video" name="video[]" require class="border border-secondary form-control"/></td>'+
        '<td><input type="text" value="" placeholder="Descripcion video" name="description_video[]" class="border border-secondary form-control"/></td>'+
        '<td><button class="d-none btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
      '</tr>';
    }

    $('.videos_table').html(Tablebody);
}

function cortesgrill(){
    var tablaresult = $(this).parents('div.imagenes_cortes').find('.imagenes_cortes');
    var quantitytr = $(this).parents('div.imagenes_cortes').find('.imagenes_cortes tr');
    var Tablebody = '';

    for (var i = 0; i < 8; i++) {
        var change = '(264,324,\'file-main'+i+'\',\'file-main2\') ';

      Tablebody += '<tr>'+
        '<td><input type="file" name="image_corte[]" id="file-main'+i+'" onchange="return Uploadclass'+ change +'" require class="file-main'+i+' border border-secondary form-control"/></td>'+
        '<td><input type="text" value="" placeholder="Descripcion corte" name="description_corte[]" require class="border border-secondary form-control"/></td>'+
        '<td><button class="d-none btn btn remove-register" id="remove-register"><i class="fas fa-trash-alt"></i></button></td>'+
      '</tr>';
    }

    $('.imagenes_cortes').html(Tablebody);
}


function validategrill(){
  var validate = 0;
  var validarmain = 0;
  var validarvideo = 0;
  var validarcorte = 0;
  var respose = '';

  /*$('.images_table input[type="text"]').each(function(e){
    if ($(this).val() == '') {
      validarmain++;
    }
  });

  $('.videos_div input[type="text"]').each(function(e){
    if ($(this).val() == '') {
      validarvideo++;
    }
  });*/

  $('.imagenes_cortes_div input[type="text"]').each(function(e){
    if ($(this).val() == '') {
      validarcorte++;
    }
  });

  if (validarmain > 0) {
    respose = 'Hay campos vacios en la seccion de imagenes principales';
  }else if(validarvideo > 0){
    respose = 'Hay campos vacios en la seccion de videos';
  }else if(validarcorte > 0){
    respose = 'Hay campos vacios en la seccion de cortes';
  }

  return respose;
}

function validatefilegrill(){
  var validarmain = 0;
  var validarvideo = 0;
  var validarcorte = 0;
  var respose = '';

  /*$('.images_table input[type="file"]').each(function(e){
    if ($(this).val() == '') {
      validarmain++;
    }
  });

  $('.videos_div input[type="file"]').each(function(e){
    if ($(this).val() == '') {
      validarvideo++;
    }
  });*/

  $('.imagenes_cortes_div input[type="file"]').each(function(e){
    if ($(this).val() == '') {
      validarcorte++;
    }
  });

  if (validarmain > 0) {
    respose = 'Falta cargar imagenes principales';
  }else if(validarcorte > 0){
    respose = 'Falta cargar imagenes de cortes';
  }

  return respose;
}

function valinputrecipes(){
  var valingredients = 0;
  var valinst = 0;
  var respose = '';

  $('.ingredients_recipe input[type="text"]').each(function(e){
    if ($(this).val() == '') {
      valingredients++;
    }
  });

  $('.instructions_recipe input[type="text"]').each(function(e){
    if ($(this).val() == '') {
      valinst++;
    }
  });

  if (valingredients > 0) {
    respose = 'Hay campos vacios en la seccion de ingredientes';
  }else if(valinst > 0){
    respose = 'Hay campos vacios en la seccion de instrucciones';
  }

  return respose;
}

$('.select-recipes-fish').select2({
    placeholder: "Selecciona receta de la semana",
    "language": {
      "noResults": function(){
         return "No se encontró receta";
      }
    },
    escapeMarkup: function (markup) {
      return markup;
    },
    ajax: {
      url: '/ws/getrecipefish',
      delay: 250,
      data: function (params) {
        var query = {
          q: params.term
        }
        return query;
      }
    }
});

  $("body").on("click",'.remove-register-font',function(e){
    e.stopPropagation();
    var id = $(this).data('id');

    var params = {
      id
    }

    axios
    .get('/ws/remove_font/',{ params })
    .then(response => {
        toastr.success("Fuente eliminada!");
        $(this).closest("tr").remove();
    })
    .catch(response => console.log(response));
  });


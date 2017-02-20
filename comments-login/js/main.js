(function() {
  'use strict';
  var addComment = $('.add_comment');
  var objSession = {};
  var obj = [];


// START date
  function date() {
    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth() + 1;
    var d = date.getDate();
    m<10?m='0'+m:m;
    d<10?d='0'+d:d;

    objSession.date = d +'.'+ m +'.'+ y +'.';
  }
  date();
// END date

  window.addEventListener('load', function () {
// START / Import SESSION name
    var sess = new XMLHttpRequest();
    sess.addEventListener('readystatechange', function () {
      if (sess.status === 200 && sess.readyState === 4) {
        getSession(sess);
      }
    });
    sess.open('POST', 'inc/getSession.php');
    sess.send();

// START / Import data, sve komentare iz baze
    var json = new XMLHttpRequest();
    json.addEventListener('readystatechange', function () {
      if (json.status === 200 && json.readyState === 4) {
        getData(json);
      }
    });
    json.open('POST', 'inc/getData.php');
    json.send();
  });

  function getSession(sess) {
    var data = JSON.parse(sess.responseText);
    objSession.username = data.username;
  }
// END / Import SESSION name

  function getData(json) {
    var data = JSON.parse(json.responseText);
    obj = data;
    textTemplate();
    // console.log(obj);
  }
// END / Import data

// klik na button izbacuje input
  addComment.on('click', function(e) {
    $(this).attr('disabled', true);
    $('.panel-footer').append('<input type="text" name="comment" class="form-control input_comment"></input>');
    $('.input_comment').focus();

    $('.input_comment').focusout(function(e) {
        addComment.attr('disabled', false);
        $(this).remove();
    });
    submitComment();
  });

  // na enter submituje formu preko formData()
  function submitComment() {
    $('.input_comment').on('keyup', function (e) {
      if (e.keyCode === 13 && this.value !== "") {
        // console.log(this);
        objSession.text_comment = this.value;
        var formData = new FormData();
            formData.append('comment', objSession.text_comment);
            formData.append('username', objSession.username);
            formData.append('date', objSession.date);
        var xml = new XMLHttpRequest();
            xml.open("POST", "inc/incInsert.php");
            xml.send(formData);
        $(this).remove();
        addComment.attr('disabled', false);
        newTextTemplate();
      }
    });
  }

  // START / new Template comment
    function newTextTemplate() {
      var template = $('#template').html();
      for (var prop in objSession) {
        var text = template.replace(/{{username}}/,objSession.username)
                          .replace(/{{date}}/,objSession.date)
                          .replace(/{{text_comment}}/,objSession.text_comment);
      }
      $('.add_comment').after(text);
    }
  // END new Template comment

  // START / Template comments
    function textTemplate() {
      var template = $('#template').html();
      obj.forEach(function(el, i) {
        var text = template.replace(/{{username}}/,el.name)
                          .replace(/{{date}}/,el.date)
                          .replace(/{{text_comment}}/,el.comment);
        $('.panel-footer').append(text);
        // console.log(text);
      });
    }
  // END Template comments

}());

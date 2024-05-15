<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             
                <center>
                <div style="background:blue;padding:20px 20px; width:190px;">
                <div id="questionD"></div>
                
                <div id="optionD">

                </div>
                <br>
                <button onclick="skipAnswer()">Skip</button> <button onclick="saveAnswer()">Next</button>
               </div> 
               </center>
              
            </div>
        </div>
    </div>
</div>


    <script>

$(document).ready(function() {
 questionsList();
});


function questionsList() {
        $.ajax({
        type: "GET",
        url: "{{ url('questions-list') }}",
        dataType: "json",
        success: function(data) {
           if(data == 0){
            window.location.href = 'results';
           }else{
              $('#questionD').html(`<h3 style="color:white;">${data.question_text}</h3><input type="hidden" id="question_id" value="${data.id}"><input type="hidden" id="answer_correct" value="${data.answer_correct}"><input type="hidden" id="marks" value="${data.marks}">`);  
              optionList(data.id);
           }
      
        },
        error: function(xhr, status, error) {
        console.error("AJAX error: " + status + ' - ' + error);
        // Handle error
        },
        complete: function() {
       
        }
        });
}
function optionList(question_id) {
        $('#optionD').empty();
        $.ajax({
        type: "GET",
        url: "{{ url('option-list') }}",
        dataType: "json",
        data: {
          "question_id": question_id
        },
        success: function(data) {
            var j=0;
        $.each(data.options, function(i, item) {
            j++;
         $('#optionD').append(`<li><input type="radio" id="option${j}" value="${data.options[i].option_text}" name="option"><span style="color:white;">${data.options[i].option_text}</span></li>`);  
        });
        },
        error: function(xhr, status, error) {
        console.error("AJAX error: " + status + ' - ' + error);
        // Handle error
        },
        complete: function() {
       
        }
        });
}
function saveAnswer() {
        var selectedOption = $("input[name='option']:checked").val();
        var question_id = $("#question_id").val();
        var correct_answer = $("#answer_correct").val();
        var marks = $("#marks").val();
        $.ajax({
        type: "POST",
        url: "{{ url('answer') }}",
        dataType: "json",
        data: {
          "selectedOption": selectedOption,
          "question_id": question_id,
          "correct_answer": correct_answer,
          "marks": marks,
          "status": 1
        },
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            if (data.error) {
                // Handle error
            } else {
                window.location.reload();
            }
        },
        error: function(xhr, status, error) {
        console.error("AJAX error: " + status + ' - ' + error);
        // Handle error
        },
        complete: function() {
       
        }
        });
}

function skipAnswer(){
        var selectedOption = $("input[name='option']:checked").val();
        var question_id = $("#question_id").val();
        var correct_answer = $("#answer_correct").val();
        var marks = $("#marks").val();
        $.ajax({
        type: "POST",
        url: "{{ url('answer') }}",
        dataType: "json",
        data: {
          "selectedOption": selectedOption,
          "question_id": question_id,
          "correct_answer": correct_answer,
          "marks": marks,
          "status": 0
        },
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            if (data.error) {
                // Handle error
            } else {
                window.location.reload();
            }
        },
        error: function(xhr, status, error) {
        console.error("AJAX error: " + status + ' - ' + error);
        // Handle error
        },
        complete: function() {
       
        }
        });
}
    </script>
</body>
</html>

document.getElementById('add').onclick = function createInputField() {
    if( document.getElementById("demo").innerHTML == 'Open_Ended')
    {
      var txt;
      var ques = prompt("Please enter your question:", "How are you?");
      if (ques == null || ques == "") {
        txt = "User cancelled the prompt.";
      } else {
        txt = ques;
      }
      var msg=document.createElement('P');
      msg.innerHTML = txt;
     
  var input = document.createElement('input');
  var lineBreak = document.createElement('br');

  input.setAttribute('class', 'form-control');
  input.setAttribute('style', 'width:40%');
  //input.setAttribute('value', 'checkbox1');
  //document.getElementById("demo1").innerHTML = txt;
  var testId = "element";
  var i = 0;
  var x = document.getElementsByTagName('INPUT').length - 2;
  for (i = 0; i < 1; i++) {
    i;
  }
  input.setAttribute('id', testId + i);
  input.type = 'text';
  input.name = 'element[]';
  var aplayer1 = document.getElementById('block');
  aplayer1.appendChild(msg);
 aplayer1.appendChild(input);
   aplayer1.appendChild(lineBreak);
 }


if( document.getElementById("demo").innerHTML == 'selection')
{
   
  var txt;
  var ques = prompt("Please enter your question:", "How are you?");
      if (ques == null || ques == "") {
        txt = "User cancelled the prompt.";
      } else {
        txt = ques;
      }
     //document.getElementById("demo1").innerHTML == txt;
  var msg=document.createElement('P');
  msg.innerHTML = txt;
 
  var input = document.createElement('input');
  var button = document.createElement('BUTTON');
  button.innerHTML = "add more";
  var lineBreak = document.createElement('br');

  input.setAttribute('class', 'form-control');
  input.setAttribute('style', 'width:40%');
  //input.setAttribute('value', 'checkbox1');
  //document.getElementById("demo1").innerHTML = txt;
  var testId = "element";
  var i = 0;
  var x = document.getElementsByTagName('INPUT').length - 2;
      for (i = 0; i < x; i++) {
        i;
      }
  input.setAttribute('id', testId + i);
  input.type = 'text';
  input.name = 'element[]';
  var aplayer1 = document.getElementById('block');
  aplayer1.appendChild(msg);
  aplayer1.appendChild(input);
  aplayer1.appendChild(button);
  aplayer1.appendChild(lineBreak);
 }

 if( document.getElementById("demo").innerHTML == 'checkbox')
 {
    
       var txt;
   // var checkbox = prompt("Please enter checkbox name", "checkbox1");
  //  var value = checkbox.value;
  var input = document.createElement('input');
  var lineBreak = document.createElement('br');
  input.setAttribute('class', 'form-control');
  input.setAttribute('type', 'checkbox');
  input.setAttribute('style', 'width:40%');
  //input.setAttribute('value', value);

  //document.getElementById("demo1").innerHTML = txt;
  var testId = "element";
  var i = 0;
  var x = document.getElementsByTagName('INPUT').length - 2;
  for (i = 0; i < x; i++) {
  i;
  }
  input.setAttribute('id', testId + i);
  //input.type = 'text';
  input.name = 'element[]';
  var aplayer1 = document.getElementById('block');
  aplayer1.appendChild(input);
  aplayer1.appendChild(lineBreak); 
 }



}

document.getElementById('remove').onclick = function removeInputField() {
  
  var x = document.getElementsByTagName('INPUT').length;
  if ( x > 3 ) {
  $('#block input:last').remove();
  $('#block br:last').remove();
  return false;
  } else {
  }
}


/* function myFunction1() {
  var txt;
  var ques = prompt("Please enter your name:", "Harry Potter");
  if (ques == null || ques == "") {
    txt = "User cancelled the prompt.";
  } else {
    txt = "Hello " + ques + "! How are you today?";
  }
  document.getElementById("demo").innerHTML = txt;
}
 */

function myFunction() {
    var txt;

    //var as = document.form1.ddlViewBy.value;
    var e = document.getElementById("choice");
    var strUser = e.options[e.selectedIndex].value;   
   // var ques = prompt(document.createElement('select'));
    if (strUser == null || strUser == "") {
      txt = "User cancelled the prompt.";
    } else {
      txt = strUser;
    }
    document.getElementById("demo").innerHTML = txt;
  }


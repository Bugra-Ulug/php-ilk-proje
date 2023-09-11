function init() { 
var firebaseConfig = {
    apiKey: "AIzaSyCNQsxxHBfve71iBBIKtoNpRtdy56rmirw",
    authDomain: "proje-1b3fb.firebaseapp.com",
    projectId: "proje-1b3fb",
    storageBucket: "proje-1b3fb.appspot.com",
    messagingSenderId: "773051955715",
    appId: "1:773051955715:web:a2c0d69e189553f936ec36"
 };
  firebase.initializeApp(firebaseConfig);

  ref = firebase.database().ref("messages");


    firebase.database().ref("messages").on("child_added",(snapshot)=>{
        var html ='';
        if (snapshot.val().sender == myName){

            html += '<li class="message mine">';
            html += '<p class="text">' + snapshot.val().message + '</p>';
            html += '<span class="date">' + tarihCevir(snapshot.val().time) + '</span>';
            html += '</li>';

        }else{
            html += '<li class="message">';
            html += '<p class="text">' + snapshot.val().message + '</p>';
            html += '<span class="date">' + tarihCevir(snapshot.val().time) + '</span>';
            html += '<span class="sender">' + snapshot.val().sender +'</span>';
            html += '</li>';
        }
        messages.innerHTML += html;
        messages.scroll({behavior:"smooth",top:99999999999999999});
    });
}

function sohbeteBasla(){
    myName = nameInput.value;
    if(myName.length > 0){
        console.log(myName);
        login.classList.add("hidden");
        init();
    }
}

function tarihCevir(stamp){
    var dt = new Date(stamp);
    var s = "0" + dt.getHours();
    var d = "0" + dt.getMinutes();
    var format = s.substr(-2) + ":" + d.substr(-2);
    return format;
}

function mesajGonder(){
    var msg = document.getElementById("myInput").value;
    if(msg.length > 0){
        ref.push().set({
            sender:myName,
            message:msg,
            time:firebase.database.ServerValue.TIMESTAMP
        });
    }
    document.getElementById("myInput").value = "";
}

if(document.getElementById("status") != null){
    var idPost=document.getElementById("status").innerHTML;
}

var login = document.querySelector(".login")
var nameInput = document.getElementById("myName");
var messages = document.getElementById("messages");
var myName ="";
var ref;


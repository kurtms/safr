/**
 * Created by Kurt on 7/24/2016.
 */


window.onload = function scrollToBottom(){
    var objDiv = document.getElementsByClassName("messages_container")[0];
    objDiv.scrollTop = objDiv.scrollHeight;
};
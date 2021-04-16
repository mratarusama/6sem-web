<?php
    if(isset($_FILES['guestbook'])) {
        rename('./messages.inc', './messages_'.date('d-h-i-s').'.inc');
        move_uploaded_file($_FILES['guestbook']['tmp_name'], './messages.inc');
        echo "<meta http-equiv=\"refresh\" content=\"0;url=./GuestBook\">";
        die();
    }
?>

<script src="./js/uploadGuestBook.js" defer></script>
<link rel="stylesheet" href="./css/uploadGuestBook.css">

<div id="content">
    <div id="uploadzone"></div>
    <div id="upload">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 502 502" style="enable-background:new 0 0 502 502;" xml:space="preserve">
            <path d="M431.071,95.929l-93-93C336.195,1.054,333.652,0,331,0H78c-5.523,0-10,4.477-10,10v482c0,5.523,4.477,10,10,10h346
				c5.522,0,10-4.477,10-10V103C434,100.348,432.946,97.804,431.071,95.929z M341,34.143L399.857,93H341V34.143z M414,482H88V20h233
				v83c0,5.523,4.478,10,10,10h83V482z"/>
            <path d="M138.5,174H304c5.522,0,10-4.477,10-10s-4.478-10-10-10H138.5c-5.523,0-10,4.477-10,10S132.977,174,138.5,174z"/>
            <path d="M363.5,220h-225c-5.523,0-10,4.477-10,10s4.477,10,10,10h225c5.522,0,10-4.477,10-10S369.022,220,363.5,220z"/>
            <path d="M363.5,286h-225c-5.523,0-10,4.477-10,10s4.477,10,10,10h225c5.522,0,10-4.477,10-10S369.022,286,363.5,286z"/>
            <path d="M363.5,352h-225c-5.523,0-10,4.477-10,10s4.477,10,10,10h225c5.522,0,10-4.477,10-10S369.022,352,363.5,352z"/>
            <path d="M341.5,174h22c5.522,0,10-4.477,10-10s-4.478-10-10-10h-22c-5.522,0-10,4.477-10,10S335.978,174,341.5,174z"/>
        </svg>
        <p>Перетащите файл сюда</p>
        <div id="status"></div>
    </div>
    <form id="form" action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="guestbook">
    </form>
</div>
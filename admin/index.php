<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Talk-Me Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<style type="text/css" media="all">
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }

  header {
    top: 0;
    color: #fff;
    position: sticky;
    background-color: green;
    padding: 5px 0px 5px 10px;
  }
  footer {
    bottom: 0;
    display: flex;
    padding: 1.8rem 1rem 1rem 1rem;
    position: sticky;
    background: green;
    align-items: center;
    justify-content: space-around;
  }
  main {
    padding: 0px;
  }

  form {
    display: flex;
  }

  #input[type="text"] {
    flex-grow: 1;
    width: 70vw;
    padding: .6rem;
    max-height: 70px;
    font-size: 4.5vw;
    align-items: center;
    border-radius: .5rem;
    border: 2px solid #ccc;
  }
  
  button[type="submit"] {
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 4.5vw;
    margin-left: 1rem;
    border-radius: .5rem;
    padding: 1rem 1.2rem;
    background-color: #333;
  }

  #chat-window {
    border-top: 2px solid red;
    border-bottom: 2px solid red;
   /* border-radius: .5rem;*/
    padding: 1rem;
    height: 65vh;
    overflow-y: scroll;
  }

  .chat-message {
    margin-bottom: 1rem;
  }

  .user-message {
    color: #333;
  }

  .bot-message {
    color: #666;
  }

</style>
<body onload="load()">
  <header>
    <h1>Talk-Me 📝</h1>
    <a style="color:yellow;" href="input.php"><h4>Change-name</h4></a>
    <img onclick="location.reload()" style="width:3rem;height:auto;position:absolute;right:1rem;top:1rem;border:2px solid yellow;border-radius:50%;box-shadow:0 0 10px #fff;" src="https://cdn-icons-png.flaticon.com/512/1040/1040252.png?w=740&t=st=1678544621~exp=1678545221~hmac=2326585cb334bbb5a39b5ae1b26a6badb303c4c3021f8eb56df0535544b7e1bd">
  </header>
  <main>
    <!--p>
          Welcome to my Talk-Me page!
        </p>
        <p>
          Here, you can chat with me and ask me any questions you have.
        </p-->
    <div id="chat-window">
      <!-- Chat messages will be displayed here -->
      <?php
      $file_path="../text.txt";

      $file_contents=file_get_contents($file_path);

      // Output the contents of the file
      echo "$file_contents";

      ?>
    </div>
  </main>
  <footer>
    <form autocomplete="off" method="post" action="save-text.php">
      <textarea oninput="autoResize(this)" onfocus="focus()" type="text" id="input" placeholder="Enter your message" name="userText" required></textarea>
      <button onclick="Scrolldwn()" type="submit"><strong>Send</strong></button>
    </form>
  </footer>
  <script type="text/javascript" charset="utf-8">
    function load() {
      var contentDiv = document.getElementById('chat-window');
      var input = document.getElementById('input');
      contentDiv.scrollTop = contentDiv.scrollHeight;
      //document.body.scrollTop = document.body.scrollHeight;
      input.focus();
    }
    input.addEventListener("focus", ()=>{
      contentDiv.scrollTop = contentDiv.scrollHeight;
      contentDiv.style.height="500px";
    });
    function autoResize(textarea) {
      textarea.style.height = "auto";
      textarea.style.height = textarea.scrollHeight + "px";
    }
  </script>
</body>
</html>
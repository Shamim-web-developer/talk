<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
    <title>talking</title>
    <style type="text/css" media="all">
      * 
      {
        margin: 0;
        padding: 0;
      }
      body 
      {
        background: #111;
      }
      .container 
      {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: 100vh;
      }
      input[type="text"] {
        flex-grow: 1;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
      }
      button[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #00ff5c;
        color: #111;
        border: none;
        border-radius: 5px;
        margin-left: 10px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form autocomplete="off" action="name_txt.php" method="post" accept-charset="utf-8">
        <input placeholder="Enter your name" type="text" name="name" id="" value="" />
        <button type="submit"><strong>OK</strong></button>
      </form>
    </div>
  </body>
</html>
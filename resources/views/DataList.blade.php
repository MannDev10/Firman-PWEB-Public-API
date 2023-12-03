<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leaderboard</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <style>
       body {
        margin: 0;
        color: #3a3a3a;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
            "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
            sans-serif;
        }
      th {
        background-color: #0a425b;
        color: #fff;
      }

      table,
      td,
      th {
        border: 1px solid #ddd;
        border-collapse: collapse;
      }

      th,
      td {
        padding: 10px 25px;
        text-align: center;
      }

      tr {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body style="background-color: #38454b">
    <div style="width: 100%; margin-top: 10%" class="center">
      <div
        class="center"
        style="
          width: 90%;
          justify-content: space-between;
          align-items: flex-start;
        "
      >
        <div class="side-bar">
          <h3 style="margin: 0; padding: 10px; margin-bottom: 20px">
            Contents
          </h3>
          <button class="menu-button">
            <a href="/" style="text-decoration: none; color: #000"> Home </a>
          </button>
          <button class="menu-button">
            <a href="/" style="text-decoration: none; color: #000"> About Us </a>
          </button>
        </div>
        <div class="main-body" style="min-height: 70vh">
          <div style="padding: 20px">
            <h1
              style="
                font-weight: 600;
                margin: 0;
                text-align: center;
                width: 100%;
              "
            >
              Leaderboards
            </h1>
            <div style="display: flex; width: 100%; justify-content: center; margin-top: 5%">
             <table>
                <thead>
                  <tr>
                    <th>Rank</th>
                    <th>Profile Image</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($data['users'] as $item)
                  <tr>
                      <td>{{$item['id']}}</td>
                      <td><img src="{{$item['image']}}" style="width: 80px; height: 80px" /></td>
                      <td>{{$item['firstName']}} {{$item['lastName']}}</td>
                      <td>{{$item['username']}}</td>
                      <td>{{$item['age']}}</td>
                      <td>{{$item['gender']}}</td>
                      <td>{{$item['email']}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

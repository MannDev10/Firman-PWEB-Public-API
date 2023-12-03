<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="styles/styles.css" />
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
          <h3 style="margin: 0; padding: 10px; margin-bottom: 20px">Contents</h3>
          <button class="menu-button" onclick="window.location.href='/leaderboard'">Leaderboards</button>
          <button class="menu-button" onclick="window.location.hash='gameplay'">Gameplay</button>
          <button class="menu-button" onclick="window.location.hash='features'">Features</button>
          <button class="menu-button" onclick="window.location.hash='ost'">Soundtracks</button>
          <button class="menu-button" onclick="window.location.hash='images'">Weapons</button>
          <button class="menu-button" onclick="window.location.href='/'">About Us</button>
        </div>
        <div class="main-body">
          <div style="padding: 20px">
            <h1
              style="
                font-weight: 600;
                margin: 0;
                text-align: center;
                width: 100%;
              "
            >
              Monster Hunter Generations Ultimate
            </h1>
            <br />
            <br />
            <iframe
              src="https://www.youtube.com/embed/BtP_ac7cM-E?si=4T82jKfd18botRpO&loop=1"
              title="Video Header"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
              class="video-container"
            ></iframe>
            <br />
            <br />
            <div style="width: 100%">
              <img
                src="{{url('/assets/images/logo.png')}}"
                width="35%"
                style="aspect-ratio: 16/9; object-fit: contain; float: left"
                alt=""
              />
              <h3 style="text-align: justify; font-weight: 400">
                <b>Monster Hunter Generations Ultimate</b>, known in Japan as
                Monster Hunter XX, is an action-role-playing game in the
                <i>Monster Hunter series</i> developed and published by
                <b>Capcom</b>. The game serves as an expanded edition of
                <i>Monster Hunter Generations</i>. Generations Ultimate adds two
                new flagship monsters, Bloodbath Diablos and Valstrax alongside
                the four flagship monsters from the previous game. New additions
                also include two new Hunter Styles, Valor Style and Alchemy
                Style.
              </h3>
            </div>
            <br />
            <br />
            <div id="gameplay">
              <h2>Gameplay</h2>
              <h3 style="text-align: justify; font-weight: 400">
                Players take the role of a Hunter who arrives in Bherna to
                assist in Monster research of the area. The player begins by
                performing Low-Rank gathering quests before being assigned to
                take down specific monsters. Like in other games of the series,
                players hunt and carve monsters to craft new weapons and
                equipment.
              </h3>
            </div>
            <div id="features">
              <h2>Features</h2>
              <h3 style="text-align: justify; font-weight: 400">
                Monster Hunter Generations serves as a celebration of all the
                previous titles in the Monster Hunter series, with villages and
                monsters from past games returning. The feline sidekicks,
                Palicos, return as assistance characters and playable
                characters. The playable Palicos are known as Nyanta, and
                feature a selection of unique support items. They can burrow
                underground to evade monsters, gather items in the field
                significantly faster, and can resurrect twice before formally
                being knocked out. The tradeoff is that Palicos are not as
                strong as human hunters and fights can take longer to finish.
                <br />
                <br />
                Two new Hunting Styles are added to Monster Hunter Generations
                Ultimate alongside the four that appear in the normal game. The
                Valor style and the Alchemy Style. The Valor style allows
                hunters to sheath a weapon to charge attacks and absorb enemy
                hits. A variety of special attacks can be conducted from the
                sheathed stance. By performing maneuvers in the stance, players
                charge a meter that can be triggered to unlock an upgraded
                strength and moveset. Valor Style players must play skillfully
                and waste as little time attacking or chasing the monster. Valor
                Style allows only one equipable Hunter Art.
                <br />
                <br />
                The Alchemy style is a support based Style with an attached
                meter that slowly fills over time. The meter is spent on
                performing Alchemy which synthesizes special items. These items
                can be recovery or support items for the player or attached
                party. Alchemy Style allows three equitable Hunter Arts, but
                these skills are on a longer cooldown.
                <br />
                <br />
                The four returning Hunter Styles from Generations include:
                <ul>
                  <li>
                    <b>Guild Style:</b> The standard, balanced hunting style
                    used in all Monster Hunter games. Can equip up to two Hunter
                    Arts.
                  </li>
                  <li>
                    <b>Striker Style:</b> Has significantly altered combos and
                    changes to charge speed. Can equip up to three Hunter Arts.
                  </li>
                  <li>
                    <b>Aerial Style:</b> Evading into any creature, whether it
                    be a monster or another hunter, or other physical items such
                    as bombs, will have the hunter leap into the air. Gains new
                    attacks in the air at the cost of some grounded ones. Can
                    equip only one Hunter Art.
                  </li>
                  <li>
                    <b>Adept Style:</b> Evading the split second before being
                    hit will have the hunter perform a leap that covers a great
                    distance and has significant invincibility frames, being
                    able to counterattack and string combos once the leap ends.
                    Blocking the split second before being hit allows the hunter
                    to counterattack and string combos without delay. Certain
                    moves cannot be triggered from standard, and requires
                    evading/blocking. Can equip only one Hunter Art.
                  </li>
                </ul>
                Monsters can be mounted, terrain from maps in previous games
                have included more ledges to provide more mounting
                opportunities. Mounting threshold, however, has increased which
                makes mounting monsters more difficult than in
                <i>Monster Hunter 4</i>. Monsters no longer receive any damage
                or receive status effects from any source as they are mounted;
                in turn, other hunters attacks can no longer force a dismount,
                and their attacks will assist in building up the monsters
                knockdown gauge.
                <br />
                <br />
                New powerful monster types called Deviant monsters are
                introduced. Although they appear similar to Subspecies, Deviants
                have a unique title and have completely new attacks rather than
                alterations to the normal monsters existing attacks and/or more
                aggressive behaviors. Deviants only appear in their exclusive
                quests and require special tickets to access their quests.
              </h3>
            </div>
            <br />
            <iframe
              src="https://www.youtube.com/embed/NrnNUmfTkBg?si=aadeXUZaRzvTZD9p&playlist=NrnNUmfTkBg&loop=1"
              title="Video Footer"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
              class="video-container"
            ></iframe>
            <br />
            <br />
            <div style="width: 100%" id="ost">
              <h2>Soundtracks</h2>
              <div id="soundtracks"></div>
            </div>
            <div id="images">
              <h2>Weapons</h2>
              <div class="image-row" id="weapons"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/scripts/scripts.js" type="text/javascript" ></script>
  </body>
</html>

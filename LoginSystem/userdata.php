<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
	<link rel="stylesheet" href="assignment.css">
</head>
<body>
<br><br><br>
<div class="corners1" style="height:730px">
	<h1>Create Account</h1>		
	<form name="form" method="post" action="https://www.youtube.com/" onsubmit="return validateForm()">
        <h2>My first name is...</h2>
        <div class="input-group">
        <input type="name" name="name" required>
        </div>
        <h2>I am from...</h2>
        <div class="input-group">
            <form action="/action_page.php">
                <select id="city" name="city" required>
                  <option value="" selected disabled hidden>Choose here</option>
                  <option value="44.3894|79.6903">Barrie</option>
                  <option value="44.1628|77.3832">Belleville	</option>
                  <option value="43.7315|79.7624">Brampton</option>
                  <option value="43.1527|80.1716">Brant	</option>
                  <option value="43.1394|80.2644">Brantford</option>
                  <option value="44.5895|75.6843">Brockville</option>
                  <option value="43.3255|79.7990">Burlington</option>
                  <option value="43.3616|80.3144">Cambridge</option>
                  <option value="45.5509|75.2804">Clarence-Rockland</option>
                  <option value="45.0213|74.7303">Cornwall</option>
                  <option value="49.7801|92.8370">Dryden</option>
                  <option value="46.3862|82.6509">Elliot Lake</option>
                  <option value="46.4917|80.9930">Greater Sudbury</option>
                  <option value="43.5448|80.2482">Guelph</option>
                  <option value="42.9277|79.8762">Haldimand County</option>
                  <option value="43.2557|79.8711">Hamilton</option>
                  <option value="44.5337|78.9006">Kawartha Lakes</option>
                  <option value="49.7670|94.4894">Kenora</option>
                  <option value="44.2312|76.4860">Kingston</option>
                  <option value="43.4516|80.4925">Kitchener</option>
                  <option value="42.9849|81.2453">London</option>
                  <option value="43.8561|79.3370">Markham</option>
                  <option value="43.5890|79.6441">Mississauga</option>
                  <option value="43.0896|79.0849">Niagara Falls</option>
                  <option value="42.7967|80.4136">Norfolk County</option>
                  <option value="46.3091|79.4608">North Bay</option>
                  <option value="44.6082|79.4197">Orillia</option>
                  <option value="43.8971|78.8658">Oshawa</option>
                  <option value="45.4215|75.6972">Ottawa</option>
                  <option value="44.5690|80.9406">Owen Sound</option>
                  <option value="45.8267|77.1109">Pembroke</option>
                  <option value="44.3091|78.3197">Peterborough</option>
                  <option value="43.8384|79.0868">Pickering</option>
                  <option value="42.8865|79.2509">Port Colborne</option>
                  <option value="44.0005|77.2506">Prince Edward County</option>
                  <option value="44.1790|77.5861">Quinte West</option>
                  <option value="43.8828|79.4403">Richmond Hill</option>
                  <option value="42.9745|82.4066">Sarnia</option>
                  <option value="46.5136|84.3358">Sault Ste. Marie</option>
                  <option value="43.1594|79.2469">St. Catharines</option>
                  <option value="42.7777|81.1827">St. Thomas</option>
                  <option value="43.3700|80.9822">Stratford</option>
                  <option value="47.5037|79.6979">Temiskaming Shores</option>
                  <option value="Thorold|79.1989">Thorold</option>
                  <option value="48.3809|89.2477">Thunder Bay</option>
                  <option value="48.4758|81.3305">Timmins</option>
                  <option value="43.6532|79.3832">Toronto</option>
                  <option value="43.8563|79.5085">Vaughan</option>
                  <option value="43.4643|80.5204">Waterloo</option>
                  <option value="42.9922|79.2483">Welland</option>
                  <option value="42.3149|83.0364">Windsor</option>
                  <option value="43.1315|80.7472">Woodstock</option>
                </select>
        </div>
        <h2>I identify as...</h2>
        <div class="radiobutton">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
        </div>
        <h2>Looking for...</h2>
        <div class="radiobutton"style="width:140px">
            <input type="radio" id="findmale" name="findgender" value="findmale" required>
            <label for="findmale">Male Friends</label><br>
            <input type="radio" id="findfemale" name="findgender" value="findfemale">
            <label for="findfemale">Female Friends</label><br>
            <input type="radio" id="findboth" name="findgender" value="findboth">
            <label for="findboth">Any Friends</label><br>
        </div>
        <br>
        <button type="submit" class="btn" name="reg_user">Register</button>
    </form>
    
</div>
</body>
</html>
    
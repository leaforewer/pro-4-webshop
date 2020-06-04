<div class="row">
    <div class="col-12">
        <h3>Contact</h3>
    </div>
    <div class="col-6 abc">
        <form action="./index.php?content=contact_script" method="post">
        
        
            <div class="form-group">
                <ion-icon style="width: 35px; height: 35px;" name="chatbubbles-outline"></ion-icon> 
                <label  style="padding-right: 350px; padding-bottom: 5px; font-size: 25px;" for="">Onderwerp
                </label>
                <select id="subject" name="subject" style="padding-left: 30px; background-color: #6CCCCE; color: whitesmoke; padding-top: 2px; padding-bottom: 2px;">
                    <option value='feedback'>Feedback</option>
                    <option value ='klacht'>Klachten</option>
                    <option value='probleem'>Problemen</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" for="exampleFormControlTextarea1">Your Name</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="name" name="name" rows="1"></textarea>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" for="exampleFormControlTextarea1">Opmerking</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="message" name="message" rows="3"></textarea>
            </div>
            
            
            <div style="font-size: 14px; padding-left: 15px;">
            </div>
            <small id="Help" class="form-text">*Schrijf hier uw opmerkingen</small>
        </div>
        <div class="col-12" style="padding: 15px;">
            <button type="submit" class="btn btn-primary submit">Versturen</button>
        </div>
    </form>
</div>
<div style="text-align:left; padding-top: 50px;" class="map-pad">

 <p style="font-size: 25px"> <ion-icon style="width: 35px; height: 35px; padding-right: 10px;" name="map-outline"></ion-icon> Onze Locatie</p>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.5929301802753!2d5.1584627153323295!3d52.087139775970314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c668a2918b16e9%3A0x95fac93d2c242c97!2sDaltonlaan%20300%2C%203584%20BK%20Utrecht!5e0!3m2!1snl!2snl!4v1569329482946!5m2!1snl!2snl"
                width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>

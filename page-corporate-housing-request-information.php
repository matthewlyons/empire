<?php get_header(); ?>
<?php

// Start the Loop.
while ( have_posts() ) :
    the_post();

    the_content();

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }

    endwhile; // End the loop.
?>

<section class="Row__Container Row__Container--Light Row__Container--Spacer">
    <div class="Row__Inner">
        <div class="ContactForm__Container">
            <form class="ContactForm__Form ContactForm__Form--ShowLabel" id="Contact__Form" action="https://formspree.io/f/mzbyegrd" method="POST">

                <label for="name">Name*</label>
                <input name="name" type="text" value="" class="ContactForm__Input" placeholder="NAME" aria-required="true" aria-invalid="false" required>

                <label for="Orginization">Orginization*</label>
                <input name="Orginization" type="text" value="" class="ContactForm__Input" placeholder="ORGANIZATION" aria-required="true" aria-invalid="false" required>

                <label for="phone">Phone Number*</label>
                <input name="phone" type="text" value="" class="ContactForm__Input" placeholder="PHONE NUMBER" aria-required="true" aria-invalid="false" required>

                <label for="email">Email Address*</label>
                <input name="email" type="text" value="" class="ContactForm__Input" placeholder="EMAIL ADDRESS" aria-required="true" aria-invalid="false" required>


                <label for="Approximate Date of Arrival">Approximate Date of Arrival*</label>
                <input type="date" class="ContactForm__Input" name="Approximate Date of Arrival" required>
                <label>Could your stay be extended beyond the initial lease term?</label>
                <div class="ContactForm__Flex">
                    <input type="radio" name="Extended Stay" value="Yes">
                    <label for="Yes">Yes</label>
                </div>
                <div class="ContactForm__Flex">
                    <input type="radio" name="Extended Stay" value="No">
                    <label for="No">No</label>
                </div>

                
                <label for="Extended Stay Reason">If yes, please describe:</label>
                <textarea name="Extended Stay Reason" type="textarea" value="" class="ContactForm__Input" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea>


                <label>Destination City and State</label>
                <div class="ContactForm__Grid">
                    <div>
                        <label for="city">City*</label>
                        <input name="city" type="text" value="" class="ContactForm__Input" placeholder="CITY" aria-required="true" aria-invalid="false" required>
                    </div>
                    <div>
                        <label for="state">State</label>
                        <select class="ContactForm__Input" name="state">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div>







                <label for="Preferred Location">Is there a particular area you would like to be located near?</label>
                <input name="Preferred Location" type="text" value="" class="ContactForm__Input" placeholder="ENTER PREFERRED LOCATION" aria-required="false" aria-invalid="false">


                <label for="Apartment Size">Desired Apartment Size</label>
                <select class="ContactForm__Input" name="Apartment Size">
                    <option value="< 500 sq ft.">< 500 sq ft.</option>
                    <option value="500 - 999 sq ft.">500 - 999 sq ft.</option>
                    <option value="1000 - 1499 sq ft.">1000 - 1499 sq ft.</option>
                    <option value="1500 - 2000 sq ft.">1500 - 2000 sq ft.</option>
                    <option value="2000+ sq ft.">2000+ sq ft.</option>
                </select>

                <label for="Number of Beds">Desired Number of Beds</label>
                <select class="ContactForm__Input" name="Number of Beds">
                    <option value="0 beds">0 beds</option>
                    <option value="1 bed">1 bed</option>
                    <option value="2 beds">2 beds</option>
                    <option value="3 beds">3 beds</option>
                    <option value="4 beds">4 beds</option>
                    <option value="+5 beds">+5 beds</option>
                </select>
                
                <label for="Occupants">Number of people staying (including children)</label>
                <input name="Occupants" type="text" value="" class="ContactForm__Input" aria-required="false" aria-invalid="false">
                
                <label for="Pet">Will you be bringing a pet?</label>
                <select class="ContactForm__Input" name="Pet">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Service Animal">Service Animal</option>
                </select>

                <label for="Pet Description">Please list kind of animal, breed, and weight</label>
                <textarea name="Pet Description" type="textarea" value="" class="ContactForm__Input" aria-required="false" aria-invalid="false" rows="10" cols="50"></textarea>
                
                <label for="Daily Budget">Daily Budget</label>
                <input name="Daily Budget" type="text" value="" class="ContactForm__Input" placeholder="PLEASE ENTER YOUR DAILY BUDGET" aria-required="false" aria-invalid="false">
                
                <label for="Additional Features">Are there any features or specific needs we should consider when preparing your quote?</label>
                <textarea name="Additional Features" type="textarea" value="" class="ContactForm__Input" aria-required="false" aria-invalid="false" rows="10" cols="50"></textarea>
                
                
                <div>
                    <button class="Button" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
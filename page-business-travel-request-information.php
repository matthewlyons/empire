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
            <form class="ContactForm__Form ContactForm__Form--ShowLabel" id="Contact__Form" action="https://formspree.io/f/meqvakga" method="POST">
                <label for="howcanwehelp">How can we help you?*</label>
                <label for="howcanwehelp">So we can better respond to your inquiry please let us know how we can best assist:</label>
                <select class="ContactForm__Input" name="howcanwehelp">
                    <option value="Help simplify your processes">Help simplify your processes</option>
                    <option value="Control lodging costs">Control lodging costs</option>
                    <option value="Increase compliance">Increase compliance</option>
                    <option value="Reporting">Reporting</option>
                </select>
                <label for="howcanwehelp">Your affiliation with Empire Lodging:</label>
                <select class="ContactForm__Input" name="howcanwehelp">
                    <option value="I’m an Empire Lodging client">I’m an Empire Lodging client</option>
                    <option value="I’m a supplier">I’m a supplier</option>
                    <option value="I’m a traveler">I’m a traveler</option>
                    <option value="I want to become a client">I want to become a client</option>
                    <option value="I want to become an affiliate">I want to become an affiliate</option>
                </select>
                <h3>Contact Information</h3>


                <label for="name">Name*</label>
                <input name="name" type="text" value="" class="ContactForm__Input" placeholder="NAME" aria-required="true" aria-invalid="false" required>


                <label for="CompanyName">Company Name*</label>
                <input name="CompanyName" type="text" value="" class="ContactForm__Input" placeholder="COMPANY NAME" aria-required="true" aria-invalid="false" required>

                <label for="JobTitle">Job Title*</label>
                <input name="JobTitle" type="text" value="" class="ContactForm__Input" placeholder="JOB TITLE" aria-required="true" aria-invalid="false" required>

                <label for="phone">Phone Number*</label>
                <input name="phone" type="text" value="" class="ContactForm__Input" placeholder="PHONE NUMBER" aria-required="true" aria-invalid="false" required>

                <label for="email">Email Address*</label>
                <input name="email" type="text" value="" class="ContactForm__Input" placeholder="EMAIL ADDRESS" aria-required="true" aria-invalid="false" required>


                <label for="timeavaliability">Best Time to Reach You*</label>
                <input name="timeavaliability" type="text" value="" class="ContactForm__Input" placeholder="BEST TIME TO REACH YOU" aria-required="true" aria-invalid="false" required>

                <label for="address">Business Address</label>
                <input name="address" type="text" value="" class="ContactForm__Input" placeholder="BUSINESS ADDRESS" aria-required="true" aria-invalid="false" required>

                <label for="Industry">Select an Industry</label>
                <select class="ContactForm__Input" name="Industry">
                <option value="Agricultural Production - Crops">Agricultural Production - Crops</option>
                    <option value="Agricultural Production - Livestock and Animal Specialties">Agricultural Production - Livestock and
                        Animal Specialties</option>
                    <option value="Agricultural Services">Agricultural Services</option>
                    <option value="Forestry">Forestry</option>
                    <option value="Fishing, Hunting and Trapping">Fishing, Hunting and Trapping</option>
                    <option value="Metal Mining">Metal Mining</option>
                    <option value="Coal Mining">Coal Mining</option>
                    <option value="Oil and Gas Extraction">Oil and Gas Extraction</option>
                    <option value="Mining and Quarrying of Nonmetallic Minerals, Except Fuels">Mining and Quarrying of Nonmetallic Minerals,
                        Except Fuels</option>
                    <option value="Construction - General Contractors & Operative Builders">Construction - General Contractors & Operative
                        Builders</option>
                    <option value="Heamy Construction, Except Building Construction, Contractor">Heamy Construction, Except Building
                        Construction, Contractor</option>
                    <option value="Construction - Special Trade Contractors">Construction - Special Trade Contractors</option>
                    <option value="Food and Kindred Products">Food and Kindred Products</option>
                    <option value="Tobacco Products">Tobacco Products</option>
                    <option value="Textile Mill Products">Textile Mill Products</option>
                    <option value="Apparel, Finished Products from Fabrics & Similar Materials">Apparel, Finished Products from Fabrics &
                        Similar Materials</option>
                    <option value="Lumber and Wood Products, Except Furniture">Lumber and Wood Products, Except Furniture</option>
                    <option value="Furniture and Fixtures">Furniture and Fixtures</option>
                    <option value="Paper and Allied Products">Paper and Allied Products</option>
                    <option value="Printing, Publishing and Allied Industries">Printing, Publishing and Allied Industries</option>
                    <option value="Chemicals and Allied Products">Chemicals and Allied Products</option>
                    <option value="Petroleum Refining and Related Industries">Petroleum Refining and Related Industries</option>
                    <option value="Rubber and Miscellaneous Plastic Products">Rubber and Miscellaneous Plastic Products</option>
                    <option value="Leather and Leather Products">Leather and Leather Products</option>
                    <option value="Stone, Clay, Glass, and Concrete Products">Stone, Clay, Glass, and Concrete Products</option>
                    <option value="Primary Metal Industries">Primary Metal Industries</option>
                    <option value="Fabricated Metal Products">Fabricated Metal Products</option>
                    <option value="Industrial and Commercial Machinery and Computer Equipment">Industrial and Commercial Machinery and
                        Computer Equipment</option>
                    <option value="Electronic & Other Electrical Equipment & Components">Electronic & Other Electrical Equipment &
                        Components</option>
                    <option value="Transportation Equipment">Transportation Equipment</option>
                    <option value="Measuring, Photographic, Medical, & Optical Goods, & Clocks">Measuring, Photographic, Medical, & Optical
                        Goods, & Clocks</option>
                    <option value="Miscellaneous Manufacturing Industries">Miscellaneous Manufacturing Industries</option>
                    <option value="Railroad Transportation">Railroad Transportation</option>
                    <option value="Local & Suburban Transit & Interurban Highway Transportation">Local & Suburban Transit & Interurban
                        Highway Transportation</option>
                    <option value="Motor Freight Transportation">Motor Freight Transportation</option>
                    <option value="United States Postal Service">United States Postal Service</option>
                    <option value="Water Transportation">Water Transportation</option>
                    <option value="Transportation by Air">Transportation by Air</option>
                    <option value="Pipelines, Except Natural Gas">Pipelines, Except Natural Gas</option>
                    <option value="Transportation Services">Transportation Services</option>
                    <option value="Communications">Communications</option>
                    <option value="Electric, Gas and Sanitary Services">Electric, Gas and Sanitary Services</option>
                    <option value="Wholesale Trade - Durable Goods">Wholesale Trade - Durable Goods</option>
                    <option value="Wholesale Trade - Nondurable Goods">Wholesale Trade - Nondurable Goods</option>
                    <option value="Building Materials, Hardware, Garden Supplies & Mobile Homes">Building Materials, Hardware, Garden
                        Supplies & Mobile Homes</option>
                    <option value="General Merchandise Stores">General Merchandise Stores</option>
                    <option value="Food Stores">Food Stores</option>
                    <option value="Automotive Dealers and Gasoline Service Stations">Automotive Dealers and Gasoline Service Stations
                    </option>
                    <option value="Apparel and Accessory Stores">Apparel and Accessory Stores</option>
                    <option value="Home Furniture, Furnishings and Equipment Stores">Home Furniture, Furnishings and Equipment Stores
                    </option>
                    <option value="Eating and Drinking Places">Eating and Drinking Places</option>
                    <option value="Miscellaneous Retail">Miscellaneous Retail</option>
                    <option value="Depository Institutions">Depository Institutions</option>
                    <option value="Nondepository Credit Institutions">Nondepository Credit Institutions</option>
                    <option value="Security & Commodity Brokers, Dealers, Exchanges & Services">Security & Commodity Brokers, Dealers,
                        Exchanges & Services</option>
                    <option value="Insurance Carriers">Insurance Carriers</option>
                    <option value="Insurance Agents, Brokers and Service">Insurance Agents, Brokers and Service</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Holding and Other Investment Offices">Holding and Other Investment Offices</option>
                    <option value="Hotels, Rooming Houses, Camps, and Other Lodging Places">Hotels, Rooming Houses, Camps, and Other Lodging
                        Places</option>
                    <option value="Personal Services">Personal Services</option>
                    <option value="Business Services">Business Services</option>
                    <option value="Automotive Repair, Services and Parking">Automotive Repair, Services and Parking</option>
                    <option value="Miscellaneous Repair Services">Miscellaneous Repair Services</option>
                    <option value="Motion Pictures">Motion Pictures</option>
                    <option value="Amusement and Recreation Services">Amusement and Recreation Services</option>
                    <option value="Health Services">Health Services</option>
                    <option value="Legal Services">Legal Services</option>
                    <option value="Educational Services">Educational Services</option>
                    <option value="Social Services">Social Services</option>
                    <option value="Museums, Art Galleries and Botanical and Zoological Gardens">Museums, Art Galleries and Botanical and
                        Zoological Gardens</option>
                    <option value="Membership Organizations">Membership Organizations</option>
                    <option value="Engineering, Accounting, Research, and Management Services">Engineering, Accounting, Research, and
                        Management Services</option>
                    <option value="Private Households">Private Households</option>
                    <option value="Services, Not Elsewhere Classified">Services, Not Elsewhere Classified</option>
                    <option value="Executive, Legislative & General Government, Except Finance">Executive, Legislative & General Government,
                        Except Finance</option>
                    <option value="Justice, Public Order and Safety">Justice, Public Order and Safety</option>
                    <option value="Public Finance, Taxation and Monetary Policy">Public Finance, Taxation and Monetary Policy</option>
                    <option value="Administration of Human Resource Programs">Administration of Human Resource Programs</option>
                    <option value="Administration of Environmental Quality and Housing Programs">Administration of Environmental Quality and
                        Housing Programs</option>
                    <option value="Administration of Economic Programs">Administration of Economic Programs</option>
                    <option value="National Security and International Affairs">National Security and International Affairs</option>
                    <option value="Nonclassifiable Establishments">Nonclassifiable Establishments</option>
                </select>

                <label for="Employees">Number of Employees</label>
                <input name="Employees" type="text" value="" class="ContactForm__Input" placeholder="NUMBER OF EMPLOYEES" aria-required="false" aria-invalid="false">


                <label for="message">Message*</label>
                <textarea name="message" type="textarea" value="" class="ContactForm__Input" placeholder="MESSAGE" aria-required="true" aria-invalid="false" rows="10" cols="50" required></textarea>
                
                
                
                <div>
                    <button class="Button" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</section>

<script>
    var form = document.getElementById("Contact__Form");

    async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("Form__Status");
        var data = new FormData(event.target);
        fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            status.innerHTML = "Thanks for your submission!";
            form.reset()
        }).catch(error => {
            console.log(error)
            status.innerHTML = "Oops! There was a problem submitting your form"
        });
    }
    form.addEventListener("submit", handleSubmit)
</script>

<?php get_footer(); ?>
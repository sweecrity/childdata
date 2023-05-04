
<html>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Table</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="main-content">

  <h1 class="text-center">Child Informations</h1>
   <hr />


<div class="section__content section__content--p40">
    <div class="container-fluid">
      <div class="row">
        <div class="table-responsive">
         <table class="table table-borderless table-striped">
          
                <thead class="bg-dark" style="color:white">
                <tr>
                <th class="column1">Action</th>
                <th class="column2">Child First Name</th>
                <th class="column3">Child Middle Name</th>
                <th class="column4">Child Last Name</th>
                <th class="column5">Child Age</th>
                <th class="column6">Gender</th>
                <th class="column7">Different Address?</th>
                <th class="column8">Child Country</th>
                <th class="column9">Child Address</th>
                <th class="column10">Child City</th>
                <th class="column11">Child State</th> 
                <th class="column12">Child Zipcode</th>

                </tr>
               </thead>


{{-- <tbody>

        @foreach($childinfos as $childinfo)
        
        
            <tr>
                <td class="column1"> 
                     <a href="{{ route('delete', ['id' => $childinfo->id]) }}"><button class="btn-danger">Delete</button></a>
                     <a href="{{ route('edit', ['id' => $childinfo->id]) }}"><button class="btn-success">Edit</button></a> 
                </td>
                <td class="column2">{{ $childinfo->firstname }}</td>
                <td class="column3">{{ $childinfo->middlename }}</td>
                <td class="column4">{{ $childinfo->lastname  }}</td>
                <td class="column5">{{ $childinfo->age }}</td>
                <td class="column6">{{ $childinfo->gender }}</td>
                <td class="column7">{{ $childinfo->differentaddress ? 'Yes' : 'No' }}</td>
                <td class="column8">{{ $childinfo->country }}</td>
                <td class="column9">{{ $childinfo->address }}</td>
                <td class="column10">{{ $childinfo->city }}</td>
                <td class="column11">{{ $childinfo->state }}</td> 
                <td class="column12">{{ $childinfo->zipcode }}</td>
                
            </tr>

        @endforeach --}}

{{-- FOR UPDATEEEE --}}

<form action="{{ url('/update/'.$childinfo->id) }}" method="POST">

@csrf    
@method('PUT')  

<tr>
   
 
    <td class="column1"> 
        ----
    </td>
    <td class="column2">
        <input type="text"  name="childfirstname" placeholder="Child First Name" value="{{ $childinfo->firstname }}" />
        <span class="text-danger"> 
            @error('childfirstname')
            {{ $message }} 
            @enderror  
          </span>
        
    </td>
    <td class="column3">
            <input type="text"  name="childmiddlename" placeholder="Child Middle Name" value="{{ $childinfo->middlename }}" />
            <span class="text-danger"> 
                @error('childmiddlename')
                {{ $message }} 
                @enderror  
              </span>
    </td>
    <td class="column4">
       
                <input type="text"  name="childlastname" placeholder="Child Last Name" value="{{ $childinfo->lastname }}" />
                <span class="text-danger"> 
                    @error('childlastname')
                    {{ $message }} 
                    @enderror  
                  </span>
    </td>

    <td class="column5">
                <input type="number"  name="childage" placeholder="Age " min="0" max="16" value="{{ $childinfo->age }}"/>
                <span class="text-danger"> 
                    @error('childage')
                    {{ $message }} 
                    @enderror  
                  </span>
    </td>
    <td class="column6">
        <select id="gender" name="gender">
            <option value="">Gender</option>
            <option value="Male" {{ $childinfo->gender == 'Male' ? 'selected' : '' }} >Male</option>
            <option value="Female" {{ $childinfo->gender == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ $childinfo->gender == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
        <span class="text-danger"> 
            @error('gender')
            {{ $message }} 
            @enderror  
          </span>
    </td>
    
    <td class="column7">
        <label for="different_address">Different Address?</label>
                <input type="checkbox"  name="differentaddress" id="differentaddress"{{ $childinfo->differentaddress ? 'checked' : '' }} />
    </td>
    <td class="column8" >
        <select id="country" name="country" style="width:80px;">
         <option value=""> country </option>
            <?php
            $countryList = array(
            "AF" => "Afghanistan",
            "AL" => "Albania",
            "DZ" => "Algeria",
            "AS" => "American Samoa",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguilla",
            "AQ" => "Antarctica",
            "AG" => "Antigua and Barbuda",
            "AR" => "Argentina",
            "AM" => "Armenia",
            "AW" => "Aruba",
            "AU" => "Australia",
            "AT" => "Austria",
            "AZ" => "Azerbaijan",
            "BS" => "Bahamas",
            "BH" => "Bahrain",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BY" => "Belarus",
            "BE" => "Belgium",
            "BZ" => "Belize",
            "BJ" => "Benin",
            "BM" => "Bermuda",
            "BT" => "Bhutan",
            "BO" => "Bolivia",
            "BA" => "Bosnia and Herzegovina",
            "BW" => "Botswana",
            "BV" => "Bouvet Island",
            "BR" => "Brazil",
            "BQ" => "British Antarctic Territory",
            "IO" => "British Indian Ocean Territory",
            "VG" => "British Virgin Islands",
            "BN" => "Brunei",
            "BG" => "Bulgaria",
            "BF" => "Burkina Faso",
            "BI" => "Burundi",
            "KH" => "Cambodia",
            "CM" => "Cameroon",
            "CA" => "Canada",
            "CT" => "Canton and Enderbury Islands",
            "CV" => "Cape Verde",
            "KY" => "Cayman Islands",
            "CF" => "Central African Republic",
            "TD" => "Chad",
            "CL" => "Chile",
            "CN" => "China",
            "CX" => "Christmas Island",
            "CC" => "Cocos [Keeling] Islands",
            "CO" => "Colombia",
            "KM" => "Comoros",
            "CG" => "Congo - Brazzaville",
            "CD" => "Congo - Kinshasa",
            "CK" => "Cook Islands",
            "CR" => "Costa Rica",
            "HR" => "Croatia",
            "CU" => "Cuba",
            "CY" => "Cyprus",
            "CZ" => "Czech Republic",
            "CI" => "Côte d’Ivoire",
            "DK" => "Denmark",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "DO" => "Dominican Republic",
            "NQ" => "Dronning Maud Land",
            "DD" => "East Germany",
            "EC" => "Ecuador",
            "EG" => "Egypt",
            "SV" => "El Salvador",
            "GQ" => "Equatorial Guinea",
            "ER" => "Eritrea",
            "EE" => "Estonia",
            "ET" => "Ethiopia",
            "FK" => "Falkland Islands",
            "FO" => "Faroe Islands",
            "FJ" => "Fiji",
            "FI" => "Finland",
            "FR" => "France",
            "GF" => "French Guiana",
            "PF" => "French Polynesia",
            "TF" => "French Southern Territories",
            "FQ" => "French Southern and Antarctic Territories",
            "GA" => "Gabon",
            "GM" => "Gambia",
            "GE" => "Georgia",
            "DE" => "Germany",
            "GH" => "Ghana",
            "GI" => "Gibraltar",
            "GR" => "Greece",
            "GL" => "Greenland",
            "GD" => "Grenada",
            "GP" => "Guadeloupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GG" => "Guernsey",
            "GN" => "Guinea",
            "GW" => "Guinea-Bissau",
            "GY" => "Guyana",
            "HT" => "Haiti",
            "HM" => "Heard Island and McDonald Islands",
            "HN" => "Honduras",
            "HK" => "Hong Kong SAR China",
            "HU" => "Hungary",
            "IS" => "Iceland",
            "IN" => "India",
            "ID" => "Indonesia",
            "IR" => "Iran",
            "IQ" => "Iraq",
            "IE" => "Ireland",
            "IM" => "Isle of Man",
            "IL" => "Israel",
            "IT" => "Italy",
            "JM" => "Jamaica",
            "JP" => "Japan",
            "JE" => "Jersey",
            "JT" => "Johnston Island",
            "JO" => "Jordan",
            "KZ" => "Kazakhstan",
            "KE" => "Kenya",
            "KI" => "Kiribati",
            "KW" => "Kuwait",
            "KG" => "Kyrgyzstan",
            "LA" => "Laos",
            "LV" => "Latvia",
            "LB" => "Lebanon",
            "LS" => "Lesotho",
            "LR" => "Liberia",
            "LY" => "Libya",
            "LI" => "Liechtenstein",
            "LT" => "Lithuania",
            "LU" => "Luxembourg",
            "MO" => "Macau SAR China",
            "MK" => "Macedonia",
            "MG" => "Madagascar",
            "MW" => "Malawi",
            "MY" => "Malaysia",
            "MV" => "Maldives",
            "ML" => "Mali",
            "MT" => "Malta",
            "MH" => "Marshall Islands",
            "MQ" => "Martinique",
            "MR" => "Mauritania",
            "MU" => "Mauritius",
            "YT" => "Mayotte",
            "FX" => "Metropolitan France",
            "MX" => "Mexico",
            "FM" => "Micronesia",
            "MI" => "Midway Islands",
            "MD" => "Moldova",
            "MC" => "Monaco",
            "MN" => "Mongolia",
            "ME" => "Montenegro",
            "MS" => "Montserrat",
            "MA" => "Morocco",
            "MZ" => "Mozambique",
            "MM" => "Myanmar [Burma]",
            "NA" => "Namibia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NL" => "Netherlands",
            "AN" => "Netherlands Antilles",
            "NT" => "Neutral Zone",
            "NC" => "New Caledonia",
            "NZ" => "New Zealand",
            "NI" => "Nicaragua",
            "NE" => "Niger",
            "NG" => "Nigeria",
            "NU" => "Niue",
            "NF" => "Norfolk Island",
            "KP" => "North Korea",
            "VD" => "North Vietnam",
            "MP" => "Northern Mariana Islands",
            "NO" => "Norway",
            "OM" => "Oman",
            "PC" => "Pacific Islands Trust Territory",
            "PK" => "Pakistan",
            "PW" => "Palau",
            "PS" => "Palestinian Territories",
            "PA" => "Panama",
            "PZ" => "Panama Canal Zone",
            "PG" => "Papua New Guinea",
            "PY" => "Paraguay",
            "YD" => "People's Democratic Republic of Yemen",
            "PE" => "Peru",
            "PH" => "Philippines",
            "PN" => "Pitcairn Islands",
            "PL" => "Poland",
            "PT" => "Portugal",
            "PR" => "Puerto Rico",
            "QA" => "Qatar",
            "RO" => "Romania",
            "RU" => "Russia",
            "RW" => "Rwanda",
            "RE" => "Réunion",
            "BL" => "Saint Barthélemy",
            "SH" => "Saint Helena",
            "KN" => "Saint Kitts and Nevis",
            "LC" => "Saint Lucia",
            "MF" => "Saint Martin",
            "PM" => "Saint Pierre and Miquelon",
            "VC" => "Saint Vincent and the Grenadines",
            "WS" => "Samoa",
            "SM" => "San Marino",
            "SA" => "Saudi Arabia",
            "SN" => "Senegal",
            "RS" => "Serbia",
            "CS" => "Serbia and Montenegro",
            "SC" => "Seychelles",
            "SL" => "Sierra Leone",
            "SG" => "Singapore",
            "SK" => "Slovakia",
            "SI" => "Slovenia",
            "SB" => "Solomon Islands",
            "SO" => "Somalia",
            "ZA" => "South Africa",
            "GS" => "South Georgia and the South Sandwich Islands",
            "KR" => "South Korea",
            "ES" => "Spain",
            "LK" => "Sri Lanka",
            "SD" => "Sudan",
            "SR" => "Suriname",
            "SJ" => "Svalbard and Jan Mayen",
            "SZ" => "Swaziland",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "SY" => "Syria",
            "ST" => "São Tomé and Príncipe",
            "TW" => "Taiwan",
            "TJ" => "Tajikistan",
            "TZ" => "Tanzania",
            "TH" => "Thailand",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trinidad and Tobago",
            "TN" => "Tunisia",
            "TR" => "Turkey",
            "TM" => "Turkmenistan",
            "TC" => "Turks and Caicos Islands",
            "TV" => "Tuvalu",
            "UM" => "U.S. Minor Outlying Islands",
            "PU" => "U.S. Miscellaneous Pacific Islands",
            "VI" => "U.S. Virgin Islands",
            "UG" => "Uganda",
            "UA" => "Ukraine",
            "SU" => "Union of Soviet Socialist Republics",
            "AE" => "United Arab Emirates",
            "GB" => "United Kingdom",
            "US" => "United States",
            "ZZ" => "Unknown or Invalid Region",
            "UY" => "Uruguay",
            "UZ" => "Uzbekistan",
            "VU" => "Vanuatu",
            "VA" => "Vatican City",
            "VE" => "Venezuela",
            "VN" => "Vietnam",
            "WK" => "Wake Island",
            "WF" => "Wallis and Futuna",
            "EH" => "Western Sahara",
            "YE" => "Yemen",
            "ZM" => "Zambia",
            "ZW" => "Zimbabwe",
            "AX" => "Åland Islands",
            );
            foreach ($countryList as $list => $country)
               {
                echo "<option value='$country' {{ $childinfo->country == '$country' ? 'selected' : '' }}>$country</option>";
                }
            ?>
            </select>       

    </td>
    <td class="column9">
        <input type="text"  name="childaddress" placeholder="Child Address" id="childaddress" value="{{ $childinfo->address }}" />
            <span class="text-danger"> 
                @error('childaddress')
                {{ $message }} 
                @enderror  
            </span>
    </td>
    <td class="column10">
      
            <input type="text"  name="childcity" placeholder="Child City" id="childcity" value="{{ $childinfo->city }}" />
            <span class="text-danger"> 
                @error('childcity')
                {{ $message }} 
                @enderror  
              </span>
    </td>
    <td class="column11">
        
        <input type="text"  name="childstate" placeholder="Child State" id="childstate" value="{{ $childinfo->state }}" />
        <span class="text-danger"> 
            @error('childstate')
            {{ $message }} 
            @enderror  
          </span>
    </td>

    <td class="column12">
                <input type="text"  name="childzipcode" placeholder="Zip Code" id="childzipcode" value="{{  $childinfo->zipcode }}" />
                <span class="text-danger"> 
                    @error('childzipcode')
                    {{ $message }} 
                    @enderror  
                </span>
    </td>
     <td>
            <button class="btn-success" type="submit">Update</button>
     </td>
 
</tr>

</form>
</table>


    
    <script>
       $(document).ready(function() {
        var differentAddress = $('#differentaddress').is(':checked');
        updateFormFields(differentAddress);
    
        $('#differentaddress').change(function() {
            var differentAddress = $(this).is(':checked');
            updateFormFields(differentAddress);
        });
    
        function updateFormFields(differentAddress) {
            if(differentAddress) {
                $('#childaddress').prop('disabled', false).prop('required','true');
                $('#childcity').prop('disabled', false).prop('required','true');
                $('#childstate').prop('disabled', false).prop('required','true');
                $('#childzipcode').prop('disabled', false).prop('required','true');
                $('#country').prop('disabled', false).prop('required','true');
            } 
            else {
                $('#childaddress').prop('disabled', true).prop('required','false');
                $('#childcity').prop('disabled', true).prop('required','false');
                $('#childstate').prop('disabled', true).prop('required','false');
                $('#childzipcode').prop('disabled', true).prop('required','false');
                $('#country').prop('disabled', true).prop('required','false');
            }
        }
    });
    
    
    </script>
    <script>
    
    const addButton = document.querySelector('#addbutton');
    const newRow = document.querySelector('#newrow');
    
    addButton.addEventListener('click', () => {
      newRow.style.display = 'table-row';
    });
        </script>
    </body>
    </html>

 </body>
 </html>
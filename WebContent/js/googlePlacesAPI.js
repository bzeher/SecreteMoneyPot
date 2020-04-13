
	function gm_authFailure() {
	}
	    $(document).ready(function() {
			initAutocompleteCustomerRecord();
	});
 		function initAutocompleteCustomerRecord() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
         $("#addressoverride").attr("autocomplete", "off");
        autocompletesBillToAddressLine1 = new google.maps.places.Autocomplete(
            (document.getElementById('addressoverride')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocompletesBillToAddressLine1.addListener('place_changed', fillInAddresssBillToAddressLine1);
      }
		function fillInAddresssBillToAddressLine1() {
        // Get the place details from the autocomplete object.
        var place = autocompletesBillToAddressLine1.getPlace();

          document.getElementById('sBillToAddressLine1').value = '';
          document.getElementById('sBillToCity').value = '';
          document.getElementById('sBillToState').value = '';
          document.getElementById('sBillToZip').value = '';

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];

		  if (addressType == "street_number") {
            var val = place.address_components[i]["short_name"];
            document.getElementById('sBillToAddressLine1').value = val;
          	 }
          if (addressType == "route") {
            var val = place.address_components[i]["long_name"];
            document.getElementById('sBillToAddressLine1').value = 
				document.getElementById('sBillToAddressLine1').value + ' ' + val;
          	 }
          	if (addressType == "locality") {
             var val = place.address_components[i]["long_name"];
             document.getElementById('sBillToCity').value = val;
           }
          if (addressType == "administrative_area_level_1") {
             var val = place.address_components[i]["short_name"];
             document.getElementById('sBillToState').value = val;
           }
          if (addressType == "postal_code") {
             var val = place.address_components[i]["short_name"];
             document.getElementById('sBillToZip').value = val;
           }
        }
      }		function geolocatesBillToAddressLine1() {
       	if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
           autocompletesBillToAddressLine1.setBounds(circle.getBounds());
          });
        }
  }

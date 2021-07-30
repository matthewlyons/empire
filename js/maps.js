let map;

function initMap() {
  const styledMapType = new google.maps.StyledMapType(
    [
      {
        elementType: 'geometry',
        stylers: [
          {
            color: '#f5f5f5'
          }
        ]
      },
      {
        elementType: 'labels',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        elementType: 'labels.icon',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#616161'
          }
        ]
      },
      {
        elementType: 'labels.text.stroke',
        stylers: [
          {
            color: '#f5f5f5'
          }
        ]
      },
      {
        featureType: 'administrative',
        elementType: 'geometry',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'administrative.country',
        elementType: 'geometry.stroke',
        stylers: [
          {
            color: '#000000'
          },
          {
            visibility: 'on'
          }
        ]
      },
      {
        featureType: 'administrative.land_parcel',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#bdbdbd'
          }
        ]
      },
      {
        featureType: 'administrative.locality',
        elementType: 'geometry.stroke',
        stylers: [
          {
            color: '#000000'
          },
          {
            weight: 8
          }
        ]
      },
      {
        featureType: 'administrative.neighborhood',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'administrative.province',
        elementType: 'geometry.stroke',
        stylers: [
          {
            color: '#000000'
          },
          {
            visibility: 'on'
          }
        ]
      },
      {
        featureType: 'poi',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'poi',
        elementType: 'geometry',
        stylers: [
          {
            color: '#eeeeee'
          }
        ]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#757575'
          }
        ]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [
          {
            color: '#e5e5e5'
          }
        ]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#9e9e9e'
          }
        ]
      },
      {
        featureType: 'road',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [
          {
            color: '#ffffff'
          }
        ]
      },
      {
        featureType: 'road',
        elementType: 'labels.icon',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'road.arterial',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#757575'
          }
        ]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [
          {
            color: '#dadada'
          }
        ]
      },
      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#616161'
          }
        ]
      },
      {
        featureType: 'road.local',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#9e9e9e'
          }
        ]
      },
      {
        featureType: 'transit',
        stylers: [
          {
            visibility: 'off'
          }
        ]
      },
      {
        featureType: 'transit.line',
        elementType: 'geometry',
        stylers: [
          {
            color: '#e5e5e5'
          }
        ]
      },
      {
        featureType: 'transit.station',
        elementType: 'geometry',
        stylers: [
          {
            color: '#eeeeee'
          }
        ]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [
          {
            color: '#c9c9c9'
          }
        ]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [
          {
            color: '#9e9e9e'
          }
        ]
      }
    ],
    { name: 'Styled Map' }
  );

  const locations = [
    { title: 'Boise, ID', location: { lat: 43.615, lng: -116.2023 } },
    { title: 'Houston, TX', location: { lat: 29.7604, lng: -95.3698 } },
    { title: 'New York, NY', location: { lat: 40.7128, lng: -74.006 } },

    { title: 'Spokane, WA', location: { lat: 47.6166, lng: -117.3677 } },
    { title: 'Sioux Falls, SD', location: { lat: 43.55, lng: -96.7003 } },
    {
      title: 'Indianapolis, IN',
      location: { lat: 39.7684, lng: -86.158 }
    },
    { title: 'Cleveland, OH', location: { lat: 41.4995, lng: -81.6954 } },
    {
      title: 'Anchorage, AK',
      location: { lat: 61.2181, lng: -149.9003 }
    },
    { title: 'Omaha, NE', location: { lat: 41.2586, lng: -95.9378 } },
    {
      title: 'Louisville, KY',
      location: { lat: 38.2542, lng: -85.7594 }
    },
    {
      title: 'Harrisburg, PA',
      location: { lat: 40.2737, lng: -76.8844 }
    },
    { title: 'Honolulu, HI', location: { lat: 21.3069, lng: -157.8583 } },
    {
      title: 'Des Moines, IA',
      location: { lat: 41.6005, lng: -93.6091 }
    },
    { title: 'Knoxville, TN', location: { lat: 35.9606, lng: -83.9207 } },
    { title: 'Baltimore, MD', location: { lat: 39.2904, lng: -76.6122 } },
    {
      title: 'Sacramento, CA',
      location: { lat: 38.4666, lng: -121.3177 }
    },
    {
      title: 'Kansas City, MO',
      location: { lat: 39.0997, lng: -94.5786 }
    },
    { title: 'Nashville, TN', location: { lat: 36.1659, lng: -86.7844 } },
    { title: 'Beckley, WV', location: { lat: 37.7782, lng: -81.1882 } },
    { title: 'San Jose, CA', location: { lat: 37.3394, lng: -121.895 } },
    {
      title: 'Oklahoma City, OK',
      location: { lat: 35.4676, lng: -97.5164 }
    },
    { title: 'Memphis, TN', location: { lat: 35.1495, lng: -90.049 } },
    { title: 'Fort Lee, VA', location: { lat: 37.4957, lng: -77.3353 } },
    {
      title: 'Los Angeles, CA',
      location: { lat: 34.0522, lng: -118.2437 }
    },
    {
      title: 'Little Rock, AR',
      location: { lat: 34.7465, lng: -92.2896 }
    },
    {
      title: 'Montgomery, AL',
      location: { lat: 32.2335, lng: -86.2333 }
    },
    { title: 'Raleigh, NC', location: { lat: 35.7721, lng: -78.6386 } },
    {
      title: 'San Diego, CA',
      location: { lat: 32.7153, lng: -117.1573 }
    },
    {
      title: 'New Orleans, LA',
      location: { lat: 29.9547, lng: -90.0751 }
    },
    { title: 'Jackson, MS', location: { lat: 32.2988, lng: -90.1848 } },
    { title: 'Charlotte, NC', location: { lat: 35.2271, lng: -80.8431 } },
    { title: 'Phoenix, AZ', location: { lat: 33.4484, lng: -112.074 } },
    { title: 'Amarillo, TX', location: { lat: 35.222, lng: -101.8313 } },
    { title: 'Portland, ME', location: { lat: 43.6615, lng: -70.2553 } },
    {
      title: 'Fort Jackson, SC',
      location: { lat: 29.3577, lng: -89.4551 }
    },
    { title: 'Las Vegas, NV', location: { lat: 36.175, lng: -115.1372 } },
    { title: 'Dallas, TX', location: { lat: 32.7668, lng: -96.7836 } },
    {
      title: 'Springfield, MA',
      location: { lat: 42.1015, lng: -72.5898 }
    },
    { title: 'Atlanta, GA', location: { lat: 33.749, lng: -84.388 } },
    {
      title: 'Salt Lake City, UT',
      location: { lat: 40.7608, lng: -111.8911 }
    },
    { title: 'El Paso, TX', location: { lat: 31.8001, lng: -106.2005 } },
    { title: 'Boston, MA', location: { lat: 42.3584, lng: -71.0598 } },
    {
      title: 'Jacksonville, FL',
      location: { lat: 30.3322, lng: -81.6556 }
    },
    { title: 'Tampa, FL', location: { lat: 27.9475, lng: -82.4584 } },
    { title: 'Butte, MT', location: { lat: 46.0038, lng: -112.5347 } },
    {
      title: 'San Antonio, TX',
      location: { lat: 29.4241, lng: -98.4936 }
    },
    { title: 'Fort Dix, NJ', location: { lat: 40.0298, lng: -74.6185 } },
    { title: 'Miami, FL', location: { lat: 25.7743, lng: -80.1937 } },
    { title: 'Denver, CO', location: { lat: 39.7392, lng: -104.9847 } },
    { title: 'Milwaukee, WI', location: { lat: 43.0006, lng: -87.9668 } },
    { title: 'Syracuse, NY', location: { lat: 43.0481, lng: -76.1474 } },
    { title: 'Seattle, WA', location: { lat: 47.6062, lng: -122.3321 } },
    {
      title: 'Albuquerque, NM',
      location: { lat: 35.0845, lng: -106.6511 }
    },
    { title: 'Lansing, MI', location: { lat: 42.7325, lng: -84.5555 } },
    { title: 'Buffalo, NY', location: { lat: 42.8865, lng: -78.8784 } },
    { title: 'Fargo, ND', location: { lat: 46.8772, lng: -96.7898 } },
    { title: 'Chicago, IL', location: { lat: 41.85, lng: -87.65 } },
    { title: 'Albany, NY', location: { lat: 42.6001, lng: -73.9662 } },
    { title: 'Portland, OR', location: { lat: 45.5234, lng: -122.6762 } },
    { title: 'Minneapolis, MN', location: { lat: 44.98, lng: -93.2638 } },
    { title: 'Columbus, OH', location: { lat: 39.9612, lng: -82.9988 } },
    {
      title: 'Pittsburgh, PA',
      location: { lat: 40.4406, lng: -79.9959 }
    }
  ];

  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 37.0902, lng: -95.7129 },
    zoom: 4,
    disableDefaultUI: true,
    gestureHandling: 'none',
    zoomControl: false
  });

  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');

  locations.forEach((marker) => {
    let position = new google.maps.Marker({
      position: marker.location,
      title: marker.title,
      map: map
    });
    position.addListener('mouseover', (e) => {
      let left = e.domEvent.clientX + 'px';
      let top = e.domEvent.clientY + 'px';
      let div = document.getElementById('MarkerWindow');
      div.style.left = left;
      div.style.top = top;
      div.style.display = 'block';
      div.innerHTML = `<p>${marker.title}</p>`;
      console.log(marker.title);
    });
    position.addListener('mouseout', () => {
      let div = document.getElementById('MarkerWindow');
      div.style.display = 'none';
    });
  });
}

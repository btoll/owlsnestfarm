const DIAMETER = 600;
const RADIUS = 300;

const createDiv = () =>
    document.createElement('div');

let half;

// Create the Market!
const market = createDiv();
market.id = 'market';

const vendorArea = createDiv();
vendorArea.id = 'vendorArea';
market.appendChild(vendorArea);

const activeVendors = createDiv();
activeVendors.id = 'activeVendors';
vendorArea.appendChild(activeVendors);

const ctable = createDiv();
ctable.appendChild(document.createTextNode("Community Table"));
ctable.className = 'vendor';
ctable.style.top = '0px';
ctable.style.left = `${RADIUS - 60}px`;
vendorArea.appendChild(ctable);

const gazebo = createDiv();
gazebo.appendChild(document.createTextNode("Gazebo"));
gazebo.className = 'vendor';
gazebo.style.top = `${DIAMETER - 40}px`;
gazebo.style.left = `${RADIUS - 60}px`;
vendorArea.appendChild(gazebo);

const coll = document.createDocumentFragment();
/////////////////////

/////////////////////
let vendors = [];
let isEven;
let spaced;
//let x = RADIUS - 60, y;
let x, y;
let newVendorOrder;
/////////////////////

const getEastVendors = () => {
    half = vendors.length >> 1;

    //const spaced = DIAMETER / (half + 1);

    // We want more vendors on the east side for an odd number of vendors.
    eastVendors = vendors.slice(0, Math.ceil(vendors.length / 2));
    const middleEastVendor = eastVendors.length >> 1;

    // Note that each vendors list needs to know its middle!
    isEven = eastVendors.length % 2 === 0;
    spaced = DIAMETER / (eastVendors.length + 1);

    eastVendors.forEach((vendor, index) => {
        const div = createDiv();
        div.className = 'vendor';

        y = (index + 1) * spaced;
        div.style.top = `${y}px`;

        // Both middle vendors must have the same `x` coord in an even vendor list.
        if ((index + 1) === (middleEastVendor + 1) && isEven) {
            div.style.left = `${x}px`;
        } else {
            if (index > middleEastVendor) {
                x -= spaced;
            } else {
                x += spaced;
            }

            div.style.left = `${x}px`;
        }

        div.appendChild(document.createTextNode(vendor));
        coll.appendChild(div);
    });
};

const getWestVendors = () => {
    // We want less vendors on the west side for an odd number of vendors.
    westVendors = vendors.slice(Math.ceil(vendors.length / 2));
    const middleWestVendor = westVendors.length >> 1;

    // Move initial `x` coord further to the left to account for the Gazebo.
    x -= spaced;
    spaced = DIAMETER / (westVendors.length + 1);

    isEven = westVendors.length % 2 === 0;

    westVendors.forEach((vendor, index) => {
        const div = createDiv();
        div.className = 'vendor';

        // The first of the 'west' vendors must not have the decreased `y` coord!
        div.style.top = `${y}px`;
        y -= spaced;

        if ((index + 1) === (middleWestVendor + 1) && isEven) {
            div.style.left = `${x}px`;
        } else {
            if (index > middleWestVendor ) {
                x += spaced;
            } else {
                x -= spaced;
            }

            div.style.left = `${x}px`;
        }

        div.appendChild(document.createTextNode(vendor));
        coll.appendChild(div);
    });
};

const setupForm = () => {
    document.getElementsByTagName('form')[0].addEventListener('submit', e => {
        const input = document.getElementById('vendorsList');

        try {
            // Replace commas first to make an array from the string.
            newVendorOrder = Array.from(input.value.split(','));

            document.getElementById('activeVendors').innerHTML = '';
            createMarket();

            window.location = `${location.origin}/market-day/vendors.html?v=${encodeURIComponent(newVendorOrder)}`;
        } catch (e) {
            alert('Malformed vendor input string!');
        }

        e.preventDefault();
    });
};

const setVendors = () => {
    // https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams
    const searchParams = new URLSearchParams(window.location.search);

    if (newVendorOrder) {
        vendors = newVendorOrder;
    } else if (searchParams.has('v')) {
        try {
            vendors = JSON.parse(`[${searchParams.get('v')}]`);
        } catch (e) {
        }
    }
};

const createMarket = () => {
    setVendors();

    x = RADIUS - 60;
    y = 0;
    getEastVendors();
    getWestVendors();

    activeVendors.appendChild(coll);
};


<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$path = [
    ["lat" => 51.478302, "lng" => -2.498105],
    ["lat" => 51.478484, "lng" => -2.496351],
    ["lat" => 51.478108, "lng" => -2.496052],
    ["lat" => 1.478132, "lng" => -2.494838],
    ["lat" => 51.478289, "lng" => -2.494202],
    ["lat" => 51.478242, "lng" => -2.493962],
    ["lat" => 51.477769, "lng" => -2.493253],
    ["lat" => 51.477761, "lng" => -2.492371],
    ["lat" => 51.477173, "lng" => -2.491592],
    ["lat" => 51.477134, "lng" => -2.491379],
    ["lat" => 51.477923, "lng" => -2.488219],
    ["lat" => 51.477855, "lng" => -2.487678],
    ["lat" => 51.477899, "lng" => -2.48659],
    ["lat" => 51.477827, "lng" => -2.486426],
    ["lat" => 51.476326, "lng" => -2.485248],
    ["lat" => 51.476193, "lng" => -2.485034],
    ["lat" => 51.475105, "lng" => -2.485288],
    ["lat" => 51.474119, "lng" => -2.484337],
    ["lat" => 51.473527, "lng" => -2.484014],
    ["lat" => 51.472783, "lng" => -2.484916],
    ["lat" => 51.472275, "lng" => -2.483822],
    ["lat" => 51.472438, "lng" => -2.483116],
    ["lat" => 51.472273, "lng" => -2.482655],
    ["lat" => 51.471288, "lng" => -2.482997],
    ["lat" => 51.470747, "lng" => -2.481746],
    ["lat" => 51.469827, "lng" => -2.480555],
    ["lat" => 51.469617, "lng" => -2.479851],
    ["lat" => 51.469402, "lng" => -2.479686],
    ["lat" => 51.469, "lng" => -2.479758],
    ["lat" => 51.467581, "lng" => -2.484166],
    ["lat" => 51.47605148942306, "lng" => -2.4523233880757145],
    ["lat" => 51.466125, "lng" => -2.481183],
    ["lat" => 51.465204, "lng" => -2.480854],
    ["lat" => 51.464478, "lng" => -2.481711],
    ["lat" => 51.463566, "lng" => -2.477427],
    ["lat" => 51.463082, "lng" => -2.477538],
    ["lat" => 51.462096, "lng" => -2.474911],
    ["lat" => 51.462599, "lng" => -2.469968],
    ["lat" => 51.461733, "lng" => -2.471017],
    ["lat" => 51.459469, "lng" => -2.472974],
    ["lat" => 51.459432, "lng" => -2.473104],
    ["lat" => 51.459319, "lng" => -2.47329],
    ["lat" => 51.458895, "lng" => -2.474707],
    ["lat" => 51.459207, "lng" => -2.475576],
    ["lat" => 51.459017, "lng" => -2.476303],
    ["lat" => 51.459171, "lng" => -2.4767],
    ["lat" => 51.45776, "lng" => -2.478882],
    ["lat" => 51.457867, "lng" => -2.479602],
    ["lat" => 51.458314, "lng" => -2.479822],
    ["lat" => 51.459268, "lng" => -2.478416],
    ["lat" => 51.459462, "lng" => -2.478297],
    ["lat" => 51.459783, "lng" => -2.477807],
    ["lat" => 51.460224, "lng" => -2.478065],
    ["lat" => 51.460321, "lng" => -2.478846],
    ["lat" => 51.460284, "lng" => -2.478912],
    ["lat" => 51.459987, "lng" => -2.480221],
    ["lat" => 51.45905, "lng" => -2.480726],
    ["lat" => 51.459185, "lng" => -2.481637],
    ["lat" => 51.460672, "lng" => -2.482557],
    ["lat" => 51.46066, "lng" => -2.48268],
    ["lat" => 51.460944, "lng" => -2.484348],
    ["lat" => 51.460732, "lng" => -2.484862],
    ["lat" => 51.460383, "lng" => -2.485047],
    ["lat" => 51.460144, "lng" => -2.484943],
    ["lat" => 51.459575, "lng" => -2.486237],
    ["lat" => 51.460131, "lng" => -2.486802],
    ["lat" => 51.460061, "lng" => -2.4872],
    ["lat" => 51.459693, "lng" => -2.487674],
    ["lat" => 51.459847, "lng" => -2.488209],
    ["lat" => 51.460361, "lng" => -2.488974],
    ["lat" => 51.460365, "lng" => -2.489139],
    ["lat" => 51.460014, "lng" => -2.489582],
    ["lat" => 51.460112, "lng" => -2.490698],
    ["lat" => 51.460192, "lng" => -2.490815],
    ["lat" => 51.460474, "lng" => -2.491618],
    ["lat" => 51.460573, "lng" => -2.49159],
    ["lat" => 51.461032, "lng" => -2.492944],
    ["lat" => 51.460982, "lng" => -2.493054],
    ["lat" => 51.460713, "lng" => -2.493157],
    ["lat" => 51.460401, "lng" => -2.493898],
    ["lat" => 51.460527, "lng" => -2.494625],
    ["lat" => 51.460414, "lng" => -2.494972],
    ["lat" => 51.460181, "lng" => -2.495064],
    ["lat" => 51.459894, "lng" => -2.495315],
    ["lat" => 51.460051, "lng" => -2.496645],
    ["lat" => 51.459869, "lng" => -2.497764],
    ["lat" => 51.460539, "lng" => -2.49791],
    ["lat" => 51.460827, "lng" => -2.498993],
    ["lat" => 51.461413, "lng" => -2.498966],
    ["lat" => 51.461874, "lng" => -2.499381],
    ["lat" => 51.461939, "lng" => -2.499323],
    ["lat" => 51.462178, "lng" => -2.499289],
    ["lat" => 51.462542, "lng" => -2.499514],
    ["lat" => 51.462685, "lng" => -2.500341],
    ["lat" => 51.462661, "lng" => -2.500352],
    ["lat" => 51.461754, "lng" => -2.499978],
    ["lat" => 51.461409, "lng" => -2.500846],
    ["lat" => 51.460676, "lng" => -2.501422],
    ["lat" => 51.460778, "lng" => -2.501809],
    ["lat" => 51.460775, "lng" => -2.501971],
    ["lat" => 51.461337, "lng" => -2.503619],
    ["lat" => 51.461821, "lng" => -2.503663],
    ["lat" => 51.462109, "lng" => -2.504287],
    ["lat" => 51.462232, "lng" => -2.504356],
    ["lat" => 51.462349, "lng" => -2.504531],
    ["lat" => 51.462922, "lng" => -2.503754],
    ["lat" => 51.463119, "lng" => -2.504177],
    ["lat" => 51.463228, "lng" => -2.505132],
    ["lat" => 51.463258, "lng" => -2.505152],
    ["lat" => 51.463465, "lng" => -2.505083],
    ["lat" => 51.463722, "lng" => -2.504834],
    ["lat" => 51.463515, "lng" => -2.504008],
    ["lat" => 51.463561, "lng" => -2.503169],
    ["lat" => 51.463663, "lng" => -2.503105],
    ["lat" => 51.463999, "lng" => -2.503351],
    ["lat" => 51.464372, "lng" => -2.503879],
    ["lat" => 51.464963, "lng" => -2.501739],
    ["lat" => 51.465023, "lng" => -2.501684],
    ["lat" => 51.465177, "lng" => -2.501635],
    ["lat" => 51.465189, "lng" => -2.501642],
    ["lat" => 51.466052, "lng" => -2.500563],
    ["lat" => 51.466156, "lng" => -2.500616],
    ["lat" => 51.467051, "lng" => -2.50034],
    ["lat" => 51.46689, "lng" => -2.499221],
    ["lat" => 51.466952, "lng" => -2.498848],
    ["lat" => 51.467674, "lng" => -2.499131],
    ["lat" => 51.468156, "lng" => -2.49837],
    ["lat" => 51.468401, "lng" => -2.498353],
    ["lat" => 51.468435, "lng" => -2.498395],
    ["lat" => 51.469366, "lng" => -2.498754],
    ["lat" => 51.469483, "lng" => -2.499083],
    ["lat" => 51.469951, "lng" => -2.499807],
    ["lat" => 51.470205, "lng" => -2.499952],
    ["lat" => 51.470787, "lng" => -2.499027],
    ["lat" => 51.470907, "lng" => -2.498987],
    ["lat" => 51.47194, "lng" => -2.497355],
    ["lat" => 51.471947, "lng" => -2.497288],
    ["lat" => 51.472013, "lng" => -2.497141],
    ["lat" => 51.472651, "lng" => -2.496886],
    ["lat" => 51.473231, "lng" => -2.497469],
    ["lat" => 51.473362, "lng" => -2.497732],
    ["lat" => 51.473311, "lng" => -2.498304],
    ["lat" => 51.474044, "lng" => -2.49889],
    ["lat" => 51.474055, "lng" => -2.499838],
    ["lat" => 51.474006, "lng" => -2.499907],
    ["lat" => 51.474006, "lng" => -2.499917],
    ["lat" => 51.474482, "lng" => -2.501075],
    ["lat" => 51.4748, "lng" => -2.501053],
    ["lat" => 51.474871, "lng" => -2.5004920],
    ["lat" => 51.475111, "lng" => -2.500112],
    ["lat" => 51.474891, "lng" => -2.499136],
    ["lat" => 51.474902, "lng" => -2.499077],
    ["lat" => 51.475753, "lng" => -2.499418],
    ["lat" => 51.475818, "lng" => -2.499341],
    ["lat" => 51.475771, "lng" => -2.498484],
    ["lat" => 51.476295, "lng" => -2.498183],
    ["lat" => 51.476405, "lng" => -2.49703],
    ["lat" => 51.47712, "lng" => -2.496851],
    ["lat" => 51.477307, "lng" => -2.496546],
    ["lat" => 51.477358, "lng" => -2.496543],
    ["lat" => 51.478159, "lng" => -2.498002]
];

$client = new Client('1616589158-361070052-462388701-1635564164');
$output = $client->postcodes()->postcodeCountByPolygon($path);

echo '<pre>';
print_r($output);
echo '</pre>';

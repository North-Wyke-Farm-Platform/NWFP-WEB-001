<x-guest-layout>
    @php
        $title = "North Wyke and the Farm Platform as a Test-Bed For Advances in Sensor Technologies";
    @endphp
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
           <x-share-on-bluesky>{{ urlencode($title) . ' -  '. app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <div style="text-align: justify" class="p-3">
        <p>In addition to the IoT network of water flow and water quality sensors installed throughout the
            Farm Platform, we are testing a variety of sensor and sensor communication technologies. Some
            that provide data at a local data collection level and those that can be fully integrated using
            various communication approaches such as Low Power, Wide Area (LPWA) networking using the
            LoRaWAN protocol or Narrow Band. Some examples of current sensor deployments are given below</p>
            <br>
            <p>For further details or enquiries on using North Wyke and the Farm Platform to test sensors,
            please contact Paul Harris (<a
                class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="mailto:paul.harris@rothamsted.ac.uk)">paul.harris@rothamsted.ac.uk)</a>
            or Louise Olde
            (<a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="mailto:louise.olde@rothamsted.ac.uk">louise.olde@rothamsted.ac.uk</a>).
        </p>
    </div>
    <h2 class="py-auto mt-4 h-8 bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Current Studies</h2>
    <div class="p-3">
        <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Air Quality</h3>
        <h4 class="mt-4 font-semibold text-nw-blue-700">Methane emissions</h4>
        <div class="flex flex-row p-3">
            <div class="w-1/3 p-4">
                <img class="" src="/images/SF6_cattle.png" alt="Cattle" />
            </div>
            <div class="w-2/3">
                <p>Enteric methane (CH4) emissions from freely-grazing animals are measured using a harmless
                    tracer gas technique. The well-established method relies on a known source of the synthetic
                    inert tracer, sulphur hexafluoride (SF6), that is inserted into the rumen as a bolus. The SF6
                    tracer technique works on the basis that excretions of two gases sourced from the rumen disperse
                    identically into the animal's environment, and thus have identical probability of interception
                    by a simple 'breath' sampler located near the nasal cavity and fitted to a halter. The samples
                    of breath are analysed in the laboratory. This technique is enabling the unknown release rate of
                    CH4 to be estimated. </p>
            </div>
        </div>

        <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Water Harvesting </h3>
        <h4 class="mt-4 font-semibold text-nw-blue-700">SmartPond</h4>
        <p>SDS Water Infrastructure Systems are interested in using smart technology to control the
            release and retention of water principally with an interest to alleviate flooding. They use
            models and weather forecasts to predict future rain events, prior to them occurring, and their
            technology is designed to release stored water, thereby creating increased water storage
            capacity. This storage can then be utilised to retain water during the high fall event to reduce
            risks of downstream or sewer flooding.
        </p>

        <p>Currently and as part of another ERDF Impact Lab project, SDS are using shed roof rainwater
            sited at the Farm Platform livestock buildings as a test bed for their new IoT-based technology.
            Rainwater falling on the Rowden and Whiddon Down livestock buildings flows into harvesting
            tanks, and release of the water is remotely controlled in order to optimise water use (say,
            through efficient use of water for field spraying).
        </p>

        <p>Further work is planned, where SDS will use the roof rainwater lagoon at Rowden Buildings as a
            test bed for their new technology. Currently rainwater falling on the Rowden buildings currently
            flows into one small lagoon, from the lagoon its release is controlled using a traditional
            'non-smart' hydro brake vortex flow control. SDS would like to replace the hydro brake with
            their own technology which will allow them to vary the speed water is released or retained
            within the lagoon.
        </p>

        <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Animal Health, Welfare and
            Behaviour
        </h3>
        <h4 class="mt-4 text-xl font-bold text-nw-blue-900">Cattle</strong></h4>
        <h4 class="mt-4 font-semibold text-nw-blue-700">Behaviour and activity</h4>
        <p>Cattle movement and activity using GPS and pedometers are used to further our understanding of
            a range of aspects of pasture-based beef production systems including behaviour, welfare,
            performance, and emissions. With these devices we can map where the animals have been grazing
            and overlay this information on a range of different measured variables such as pasture quality,
            livestock performance, dung and urine deposits, and gaseous emissions such as methane. Data form
            the animals can be automatically collected whilst they are in the field or in housing. For
            example, we are monitoring step count, standing time, lying time, standing bouts and lying bouts
            using a mobile, trailer mounted CowAlert system provided by IceRobotics Ltd to capture and
            download data from leg-mounted IceQube pedometers in-situ from grazing dairy x beef cattle to
        </p>
        <h4 class="mt-4 font-semibold text-nw-blue-700">Water usage</h4>
        <p>Using LoRaWAN enabled water meters, we can measure and compare water usage in a rotational cell
            grazing system uses very small, mobile drinking troughs with a conventional
            set-stocked/continuous grazing system which uses typical large, static water troughs. Photo
            would be nice
        </p>

        <h4 class="mt-4 font-semibold text-nw-blue-700">Drinking behaviour, health and welfare</h4>
        <p>Understanding changes in rumen temperature using a temperature bolus enables us to understand
            how life events may influence cattle health, welfare and productivity. Commonly used within the
            dairy industry, the temperature bolus is administered orally and stays in the rumen throughout
            the life of the animal. As an example of this methodology, we are using LoRaWAN enabled
            temperature sensors to monitor the temperature of drinking water in differing grazing management
            systems in combination with rumen temperature boluses to investigate whether grazing
            management/drinking trough design effects drinking behaviour of cattle.
        </p>

        <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Remote sensing</h3>
        <h4 class="mt-4 font-semibold text-nw-blue-700">Current capacity and call for collaborations</h4>
        <p>Currently, North Wyke has limited remote sensing capability but is eager to enhance this part
            of its research. Aims are to capture remotely sensed data from a range of scales from the
            platform's forage harvester (a CIEL funded project - <a
                class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://www.cielivestock.co.uk/"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">https://www.cielivestock.co.uk/</a>)
            to drones (we currently have two devices with licence holders and links to the GrassCheckGB
            project -<a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="http://www.grasscheckgb.co.uk/"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                www.grasscheckgb.co.uk</a> ) to satellite platforms in order to monitor biomass dynamics
            according field grass/crop cover type and also field livestock type.
        </p>
        <p>This can be combined with drone-based SfM photogrammetry and airborne LiDAR for sward
            characterisation and the system's Carbon assessment. Drone sensing approaches exploiting
            fine-grained thermal imaging systems can be used to map fam platform sub-catchment hydrology and
            alongside targeted fine-grained multispectral drone surveys can be used to map urine patches
            that drive greenhouse gas emissions such as N2O. All such data can in turn, inform nutrient
            content, quality and loss, and livestock performance.
        </p>
    </div>

    <h2 class="py-auto mt-4 h-8 bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Previous Studies</h2>
    <div class="p-3">
        <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4"> Air Quality</h3>

        <div class="flex flex-row">
            <div class="w-2/3">
                <h4 class="mt-4 font-semibold text-nw-blue-700">Cost Eddy Covariance System</h4>

                <p> This study is in collaboration with Rob Clement (University of Edinburgh), and Dr Hill
                    (Exeter University) who designed a prototype of a low-cost system which promises to
                    reduce
                    the cost of Eddy Covariance (EC) by an order of magnitude, making wide-spread use of
                    this
                    instrumentation economically feasible. The prototype has undergone some testing at field
                    sites in Morecambe Bay and Dumfries and Galloway. The second-generation system now
                    requires
                    testing, and the technique needs be proven at a wider range of field sites.
                </p>
                <p>
                    We are evaluating a new pump-based version of this developmental EC system alongside our
                    conventional EC system as well as the first-generation fan-based version of the system.
                    The
                    overall aim of the study will be to provide long-term (i.e. annual) greenhouse gas
                    datasets
                    for comparison of the systems to corroborate the relative performance of the inexpensive
                    systems and quantify their accuracy.
                </p>
                <p>
                    Two additional masts are installed at the Farm Platform site and are in the wind shadow
                    of
                    the existing (high cost) EC system (to avoid any turbulent disturbance to the existing
                    system).
                </p>

                <p> <span class="text-bold">Mast 1: </span> This system uses a Gill Wind Master Pro anemometer. On this
                    mast we will
                    mount three infrared gas analysers (IRGAs):
                </p>
                <ol>
                    <li>The original expensive EC system, using a 'fan'- based system </li>

                    <li>The second-generation inexpensive EC system, using a pump-based system.</li>

                    <li>A LI-COR LI7500 for corroboration. Data are recorded by a Campbell Scientific</li>
                    Cr3000.
                </ol>

                <p> <span class="text-bold">Mast 2: </span> This system uses a Gill Wind Master (not Pro) anemometer and
                    a pump
                    based
                    inexpensive EC system. The data for this system are recorded with an inexpensive Arduino
                    data logger.</p>
            </div>
            <div class="w-1/3">
                <p>
                    <img class="" src="/images/lowcostEC_sensor.png" alt="Low Cost EC-Sensor" />
                </p>
            </div>
        </div>
        <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Water Quality</h3>

        <h4 class="mt-4 font-semibold text-nw-blue-700">Artificial Intelligence-enabled low-cost sensors</h4>
        <p>
            The aim of this ERDF Impact Lab funded project (<a
                class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://www.impactlab.org.uk/"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">https://www.impactlab.org.uk/</a>)
            is to develop a network of AI-enabled water and soil sensors across the Farm Platform.
            British Telecom (BT) have enabled a Narrow-Band IoT Radio Network across its Mobile
            Network
            cell(s) which cover the Farm Platform. This facilitates communication with the installed
            sensor network. BT have also developed an IoT data processing facility to land, process,
            transform, store and publish the data on the its web platform. The aim of the project is
            to
            develop an understanding of the use of low power radio, low cost sensors and AI to
            deliver
            high frequency insights for on-farm use.
        </p>
        <p>
            Initially, water conductivity sensors will be installed in the flow cells within the
            flume
            cabins on each of the 5 blue treatment catchments. The sensors are battery powered and
            will
            utilise the NB-IoT radio module which will link the sensor data to the BT IoT Platform.
            The
            sensors will be co-located with the current water quality instrumentation including YSI
            conductivity sensors. The project will compare the current (high cost) and new sensor
            (low
            cost) data output.
        </p>
        <p>
            The conductivity sensors will be used to develop AI-enabled water quality monitoring.
            One of
            the hypotheses of this project is that through using AI, it is possible to determine a
            variety of chemical &amp; biological parameters through modelling only a small subset of
            sensor measurements. Here a conductivity sensor will be used to derive 20 new
            physical/biological properties. Some measurements can be validated through comparison
            with
            sensor data from the current Farm Platform instrumentation, others not. The second stage
            of
            the project will install AI-enabled soil sensors across the Farm Platform.
        </p>

        <h4 class="mt-4 font-semibold text-nw-blue-700">Spectrolyser</h4>
        <p>
            We are testing the hypothesis that the in-situ high-resolution technique (first tested
            in a
            laboratory set-up in Luxembourg, LIST) is suitable for obtaining high-frequency
            measurements
            of sediment properties at the flume outlet under natural runoff conditions. The main
            application to test in this research is the Spectro::lyser sensor. This sensor emits a
            light
            beam through an open path, through which water and sediment flows. The sensor measure
            absorbance (as influenced by the water and sediment). In this research, the absorbance
            values measured will be related to the sediment (properties) in the water transported
            through the flume outlet.
        </p>
        <p>
            Results of the absorbance measurements will be validated by two different methods. The
            first
            method includes taking soil samples, sieving them, and creating water and sediment
            solutions
            under lab conditions (with different concentrations of sediments added) to test the
            absorbance signal under controlled conditions. In this way, absorbance of the same
            sediments
            can be compared (under natural conditions/influence, and under completely controlled
            conditions in the lab [only sediments and blank water]).
        </p>
        <p>
            The second validation method of the in-field absorbance spectra uses the sediments
            captured
            by the automatic water sampler. Results from the Spectro::lyser (installed at the field
            outlet) are related to those times samples are taken by the automatic water sampler. The
            sediment from this automatic sampler will be analysed (e.g. for colour properties,
            chemical
            properties) to validate the absorbance readings of the Spectro::lyser at the
            corresponding
            times. In both methods, the goal is to see to what extent absorbance measurements in
            situ
            (influenced by natural conditions) relate to the mobilised sediment and its properties.
        </p>
    </div>
</x-guest-layout>

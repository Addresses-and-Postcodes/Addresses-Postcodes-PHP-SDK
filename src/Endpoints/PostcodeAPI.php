<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseMediator;

final class PostcodeAPI extends EndpointBase
{
    /**
     * Contains all live and terminated (closed) postcodes within the UK.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodesCurrentAndTerminatedAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/postcode"));
    }

    /**
     * The current county to which the postcode has been assigned.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToCountyAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/electoral-county"));
    }

    /**
     * Postcode to Local Authority District
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToLocalAuthorityDistrict(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/local-authority-district"));
    }

    /**
     * There are 33 boroughs in London (Includes the City of London which is officially a separate entity despite being located in the centre of London).
     * We’ve reversed engineered ONS data to identify the postcodes that represent each borough.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToLondonBoroughAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/london-borough"));
    }

    /**
     * Postcode to Electoral Ward / Division API
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToElectoralWardDivisionAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/electoral-ward"));
    }

    /**
     * Postcode to Civil Parish (England), Communities (Wales) API
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToCivilParishCommunitiesAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/civil-parish"));
    }

    /**
     * Shows the status of the assigned grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToNationalGridReferenceAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/national-grid-reference"));
    }

    /**
     * The health area code for the postcode.
     * SHAs were abolished in England in 2013 but the codes remain as a ‘frozen’ geography.
     * The field will otherwise be blank for postcodes with no grid reference. 36 areas across the UK.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToFormerStrategicHealthAuthority(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/hlthau"));
    }

    /**
     * NHSERs (formerly NHS Commissioning Regions - NHS CR) are sub-divisions of the NHS commissioning board.
     * There are four NHS ERs in England and they were renamed from NHS CRs in May 2017.
     * The NHS CRs were formed on 1 April 2013, replacing pan SHAs, and are responsible for providing clinical and professional leadership at sub-national level.
     * They are also responsible for the co-ordination of planning, operational management and emergency preparedness at sub-national level and undertaking direct commissioning functions and processes.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToNHSEnglandRegionsAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/nhser"));
    }

    /**
     * The code for the appropriate country (i.e. one of the four constituent countries of the UK or Crown dependencies -
     * the Channel Islands or the Isle of Man) to which each postcode is assigned.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToUKCountryNamesCodesAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/uk-country-names"));
    }

    /**
     * The nine GORs were abolished on 1 April 2011 and are now known as "regions" for statistical purposes.
     * They were the primary statistical subdivisions of England and also the areas in which the Government Offices for the Regions fulfilled their role.
     * Each region covered a number of local authorities. The region code for each postcode.
     * Pseudo codes are included for Wales, Scotland, Northern Ireland, Channel Island and Isle of Man.
     * The field will be blank for postcodes in England with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToRegionsAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/region"));
    }

    /**
     * The 8 SSRs were the primary statistical subdivisions of England before the GORs were adopted for this purpose in 1996.
     * They are now rarely used. The SSR code for the associated county or unitary authority to which each postcode is assigned.
     * A pseudo code is included for postcodes not in England. The field will be blank for postcodes in England with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToStandardStatisticalRegionsAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/standard-statistical-regions"));
    }

    /**
     * England and Wales - Parliamentary constituencies relate to those defined by the Parliamentary Constituencies (England) Order 2007,
     * the Parliamentary Constituencies (England) (Amendment) Order 2008 and the Parliamentary Constituencies (Wales) (Amendment) Order 2008,
     * and which came into effect at the May 2010 General Election. No further changes are envisaged until 2020. Scotland -
     * The Scottish Parliament (Constituencies) Act 2004, passed by the UK Parliament in July 2004,
     * came into effect upon the dissolution of the last UK Parliament and breaks the linkage between UK parliamentary constituencies and Scottish parliamentary
     * constituencies. This Act has enabled the Westminster Government to reduce the number of Scottish constituencies in the UK parliament in line with
     * recommendations made by the Boundary Commission for Scotland following its Fifth Periodical Review of Constituencies (December 2004).
     * The Parliamentary Constituencies (Scotland) Order 2005 details the reduction of the number of constituencies for the UK Parliament from 72 to 59 Scottish seats.
     * The changes bring the size of Scottish constituencies more into line with the size of English seats.
     *  English constituencies currently contain nearly 70,000 voters on average, compared to the Scottish average of 53,500.
     * Northern Ireland - In Northern Ireland, the Commission's Fifth Periodical Report on Parliamentary Constituencies outlined changes
     * to and the composition of constituencies in 2010. In practice, the new Parliamentary Constituencies are not very different to their predecessors.
     * As before there are 18 constituencies, all retaining the same name. In the main,
     * the boundary amendment process has involved the re-assigning of existing electoral wards from one constituency into a neighbouring constituency.
     * The only exception concerns Derryaghy ward within Lisburn City local government district which previously resided entirely within
     * Lagan Valley County constituency. It has now been split into two separate wards - Derryaghy (North) and Derryaghy (South),
     * the former now included in Belfast West borough constituency, the latter remaining where it was.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToWestminsterParliamentaryConstituencyAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/westminster-parliamentary-constituency"));
    }

    /**
     * EERs are as defined in the European Parliamentary Elections Bill (Bill 65, 1997) to amend the European Parliamentary Elections
     * Act 1978 so as to alter the method used in Great Britain for electing Members of the European Parliament.
     * The Bill created 9 EERs in England with 64 MEPs; Scotland, Wales and Northern Ireland each constitute a single EER, with 7 MEPs,
     * 4 MEPs and 3 MEPs respectively. The EER code for each postcode. Pseudo codes are included for Channel Islands and Isle of Man.
     * The field will otherwise be blank for postcodes with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToEuropeanElectoralRegionsAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/european-electoral-regions"));
    }

    /**
     * The LLSC (England), DCELLS (Wales) or ER (Scotland) code for each postcode.
     * Pseudo codes are included for Northern Ireland, Channel Islands and Isle of Man.
     * The field will otherwise be blank for postcodes with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToLocalLearningSkillsCouncil(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/postcode-to-local-learning-and-skills-council"));
    }

    /**
     * TTWAs are used in labour market analysis and reflect reasonably self-contained zones in which the bulk of the resident population also work.
     * The 228 current TTWAs were defined in 2015 using 2011 Census information on home and work addresses and are built from 2011 Census LSOAs in England and Wales,
     * data zones in Scotland, and SOAs in Northern Ireland (see Section 34).
     * The previous (2007) areas were based on the same statistical geographies from the 2001 Census.
     * The TTWA code for the postcode. Pseudo codes are included for Channel Islands and Isle of Man.
     * The field will otherwise be blank for postcodes with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToTravelToWorkAreasAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/travel-to-work-areas"));
    }

    /**
     * Postcodes on the ONSPD have been assigned PCO codes (England), LHB codes (Wales), CHP codes (Scotland),
     * LCG codes (NI) or Primary Healthcare Directorate code (Isle of Man).
     * Postcodes in the Channel Islands (for which there are no equivalent areas) have been assigned a pseudo code.
     *
     * @param  string $postcode
     * @return array
     */
    public function postcodeToPrimaryCareTrusts(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/primary-care-trusts"));
    }

    /**
     * NUTS is a hierarchical classification of spatial units that provides a breakdown of the European Union’s territory
     * for producing regional statistics that are comparable across the Union.
     * The NUTS area classification in the UK comprises current national administrative and electoral areas,
     * except in Scotland where some NUTS areas comprise whole and/or part Local Enterprise Regions.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToNomenclatureofUnitsforTerritorialStatistics(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/nomenclature-of-units-for-territorial-statistics"));
    }

    /**
     * "Statistical" wards were those electoral wards promulgated in Statutory Instruments by the end of a calendar year and implemented for statistical purposes on 1 April in the following year, irrespective of the year of statutory operation. The policy on statistical wards was agreed by ministers and was originally intended to minimise the impact on statistics of the frequent changes to the electoral ward boundaries. However, in 2006 a change to the policy on statistical wards was agreed by the then NSGG (the National Statistics Geography Group). The 1 April implementation date is retained but it now relates to those administrative and electoral areas that are statutorily operative on 31 December of the previous calendar year (i.e. statutory wards). As such, statistical wards no longer exist – the last set produced was 2005 statistical wards. The administrative and electoral areas in England and Wales for each postcode, used for statistical analysis. A pseudo code is included for Scotland, Northern Ireland, Channel Islands and Isle of Man. The field will be blank for postcodes in England or Wales with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeTo2005StatisticalWardsAPI(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/2005-statistical-wards"));
    }

    /**
     * The 2001 Census OAs were built from unit postcodes and constrained to 2003 ‘statistical’ wards,
     * and they form the building bricks for defining higher level geographies. Pseudo codes are included for Channel Islands and Isle of Man.
     * The field will otherwise be blank for postcodes with no grid reference. Includes OAC01, Supergroup, Group and Subgroup.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeTo2001NationalUKCensusOutputAreaClassificationNames(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/2001-national-uk-census-output-area"));
    }

    /**
     * In processing 2001 Census data for publication, 18 2003 statistical wards were identified as sub- threshold i.e.
     * the count of population and households fell below the threshold for creating OAs and for the non-disclosive release of Census data.
     * These 18 sub-threshold wards were combined with seven "receiving" wards to form acceptably sized OAs and permit publication of data.
     * The sub- threshold wards are not separately identified in the ONSPD and postcodes in these statistical wards have been assigned to their receiving ward.
     * The resulting set of wards is known as CAS wards. Sub-threshold wards (those below the threshold for creating OAs and for the
     * non- disclosive release of Census data) are not separately identified in this field and postcodes in these "statistical wards"
     * have been assigned to their "receiving ward". The resulting set of wards is known as "CAS Wards".
     * A pseudo code is included for Channel Island and Isle of Man. The field will otherwise be blank for postcodes with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeTo2001CensusAreaStatisticsWards(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/2001-census-area-statistics"));
    }

    /**
     * National parks are designed to conserve the natural beauty and cultural heritage of areas of outstanding landscape value,
     * and to promote public understanding and enjoyment of these areas. There are currently 13 national parks in England and Wales.
     * Of these, 10 were designated in the 1950s following the National Parks and Access to the Countryside Act 1949,
     * The Broads (Norfolk/Suffolk) has had a similar status since 1989 (the Broads has its own special authority, the Broads Authority,
     *  which is similar to the National Park Authorities but with extra powers in relation to navigation) and
     * The New Forest was given national park status in 2005. The South Downs is the latest national park, becoming fully operational on 1 April 2011.
     * In Scotland the National Parks (Scotland) Act was passed in July 2000.
     * The first Scottish national park, Loch Lomond and the Trossachs, was established in July 2002, and the Cairngorms National Park was established in March 2003.
     * Their boundaries are not constrained by any other geography.
     * The national parks cover parts of England, Wales and Scotland.
     * Pseudo codes are included for Northern Ireland, Channel Islands and Isle of Man.
     * The field will otherwise be blank for postcodes with no grid reference.
     *
     * @param  string $postcode Postcode of the current to lookup.
     * @return array
     */
    public function postcodeToNationalPark(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/national-park"));
    }
}

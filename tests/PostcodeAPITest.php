<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

/**
 * PostcodeAPITest
 */
final class PostcodeAPITest extends TestCase
{
    /**
     * testPostcodesCurrentAndTerminatedAPI
     *
     * @return void
     */
    public function testPostcodesCurrentAndTerminatedAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodesCurrentAndTerminatedAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToCountyAPI
     *
     * @return void
     */
    public function testPostcodeToCountyAPI(): void
    {
        // TODO: Here
    }

    /**
     * postcodeToLocalAuthorityDistrict
     *
     * @return void
     */
    public function testPostcodeToLocalAuthorityDistrict(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToLocalAuthorityDistrict('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToLondonBoroughAPI
     *
     * @return void
     */
    public function testPostcodeToLondonBoroughAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToLondonBoroughAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToElectoralWardDivisionAPI
     *
     * @return void
     */
    public function testPostcodeToElectoralWardDivisionAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToElectoralWardDivisionAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToCivilParishCommunitiesAPI
     *
     * @return void
     */
    public function testPostcodeToCivilParishCommunitiesAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToCivilParishCommunitiesAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToNationalGridReferenceAPI
     *
     * @return void
     */
    public function testPostcodeToNationalGridReferenceAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToNationalGridReferenceAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToFormerStrategicHealthAuthority
     *
     * @return void
     */
    public function testPostcodeToFormerStrategicHealthAuthority(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToFormerStrategicHealthAuthority('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToNHSEnglandRegionsAPI
     *
     * @return void
     */
    public function testPostcodeToNHSEnglandRegionsAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToNHSEnglandRegionsAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToUKCountryNamesCodesAPI
     *
     * @return void
     */
    public function testPostcodeToUKCountryNamesCodesAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToUKCountryNamesCodesAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToRegionsAPI
     *
     * @return void
     */
    public function testPostcodeToRegionsAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToRegionsAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToStandardStatisticalRegionsAPI
     *
     * @return void
     */
    public function testPostcodeToStandardStatisticalRegionsAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToStandardStatisticalRegionsAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToWestminsterParliamentaryConstituencyAPI
     *
     * @return void
     */
    public function testPostcodeToWestminsterParliamentaryConstituencyAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToWestminsterParliamentaryConstituencyAPI('ab101ab1');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToEuropeanElectoralRegionsAPI
     *
     * @return void
     */
    public function testPostcodeToEuropeanElectoralRegionsAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToEuropeanElectoralRegionsAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToLocalLearningSkillsCouncil
     *
     * @return void
     */
    public function testPostcodeToLocalLearningSkillsCouncil(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToLocalLearningSkillsCouncil('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToTravelToWorkAreasAPI
     *
     * @return void
     */
    public function testPostcodeToTravelToWorkAreasAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToTravelToWorkAreasAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToPrimaryCareTrusts
     *
     * @return void
     */
    public function testPostcodeToPrimaryCareTrusts(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToPrimaryCareTrusts('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToNomenclatureofUnitsforTerritorialStatistics
     *
     * @return void
     */
    public function testPostcodeToNomenclatureofUnitsforTerritorialStatistics(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToNomenclatureofUnitsforTerritorialStatistics('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeTo2005StatisticalWardsAPI
     *
     * @return void
     */
    public function testPostcodeTo2005StatisticalWardsAPI(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeTo2005StatisticalWardsAPI('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeTo2001NationalUKCensusOutputAreaClassificationNames
     *
     * @return void
     */
    public function testPostcodeTo2001NationalUKCensusOutputAreaClassificationNames(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeTo2001NationalUKCensusOutputAreaClassificationNames('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeTo2001CensusAreaStatisticsWards
     *
     * @return void
     */
    public function testPostcodeTo2001CensusAreaStatisticsWards(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeTo2001CensusAreaStatisticsWards('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPostcodeToNationalPark
     *
     * @return void
     */
    public function testPostcodeToNationalPark(): void
    {
        $response = $this->client()->postcodeAPI()->postcodeToNationalPark('ab101ab');
        $this->assertEquals(true, $response['status']);
    }
}

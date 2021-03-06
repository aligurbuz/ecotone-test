<?php

namespace Tests;

use App\Constants;
use App\Services\AppContainer;

trait TestHttpSupport
{
    /**
     * get http method results for test case
     *
     * @return void
     */
    protected function getHttpMethod() : void
    {
        AppContainer::terminate(Constants::responseFormatterSupplement);

        $testMock = config('testmock.'.$this->endpoint.'.get',[]);

        if(!$this->isAvailableRequiredInRules()){
            $this->status200($this->getRequest());
        }
        else{
            if(count($testMock)){
                $this->status200($this->getRequest($testMock));
            }
            else{
                $this->getRequest()->assertStatus(400);
            }
        }
    }

    /**
     * get http method results for test case
     *
     * @return void
     */
    protected function getHttpMethodWithRelations() : void
    {
        $testMock = array_merge(
            $this->getMockData('get'),
            $this->getTestEndpointRelations()
        );

        if(!$this->isAvailableRequiredInRules()){
            $this->status200($this->getRequest($testMock));
        }
        else{
            if(count($testMock)){
                $this->status200($this->getRequest($testMock));
            }
            else{
                $this->getRequest()->assertStatus(400);
            }
        }
    }

    /**
     * post required columns for test case
     *
     * @return void
     */
    protected function postRequiredColumns() : void
    {
        if(count($this->getRequiredColumns())){
            $response = $this->postJson($this->apiRequestPrefix(),[],$this->headersWithAuthorization());
            $response->assertStatus(400);
        }
        else{
            $this->assertTrue(true,true);
        }
    }

    /**
     * post http method for test case
     *
     * @return void
     */
    protected function postHttpMethod() : void
    {
        $testMock = $this->getMockData('post');

        $response = $this->postJson(
            $this->apiRequestPrefix(),
            $testMock,
            $this->headersWithAuthorization()
        );

        if(is_array($testMock) && count($testMock)){
            $this->setResponseModelCode($response);
            $response->assertStatus(200);
        }
        else{
            $response->assertStatus(400);
        }
    }

    /**
     * put http method for test case
     *
     * @return void
     */
    protected function putHttpMethod() : void
    {
        $testMock = $this->getMockData('put');

        $modelCode = [
            $this->getRepository()->getModelCode() => AppContainer::get('testModelCode')
        ];

        $response = $this->putJson(
            $this->apiRequestPrefix(),
            array_merge($testMock,$modelCode),
            $this->headersWithAuthorization()
        );

        if(is_array($testMock) && count($testMock)){
            $response->assertStatus(200);
        }
        else{
            $responseData = $this->getContentArray($response);

            if($responseData['status']){
                $response->assertStatus(200);
            }
            else{
                $response->assertStatus(400);
            }
        }
    }

    /**
     * get mock data for test case
     *
     * @param string $method
     * @return array
     */
    protected function getMockData(string $method) : array
    {
        return config('testmock.'.$this->endpoint.'.'.$method,[]);
    }
}

<?php

namespace SaintSystems\OData;

/**
 * Interface for authenticating requests.
 */
interface IAuthenticationProvider
{
    /**
     * Authenticates the specified request message.
     *
     * @param HttpRequestMessage $request the HttpRequestMessage to authenticate
     *
     * @return void
     */
    public function authenticateRequest(HttpRequestMessage $request);
}

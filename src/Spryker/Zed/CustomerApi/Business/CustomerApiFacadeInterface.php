<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerApi\Business;

use Generated\Shared\Transfer\ApiFilterTransfer;
use Generated\Shared\Transfer\ApiRequestTransfer;
use Generated\Shared\Transfer\CustomerApiTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

interface CustomerApiFacadeInterface
{

    /**
     * Specification:
     *  - Finds customers by filter transcer, including sort, conditions and pagination.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ApiRequestTransfer $apiRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ApiCollectionTransfer
     */
    public function findCustomers(ApiRequestTransfer $apiRequestTransfer);

    /**
     * Specification:
     *  - Finds customer by customer ID.
     *  - Throws CustomerNotFoundException if not found.
     *
     * @api
     *
     * @param int $idCustomer
     * @param \Generated\Shared\Transfer\ApiFilterTransfer $apiFilterTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerApiTransfer $customerTransfer
     */
    public function getCustomer($idCustomer, ApiFilterTransfer $apiFilterTransfer);

    /**
     * Specification:
     *  - Adds new customer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerApiTransfer $customerApiTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerApiTransfer
     */
    public function addCustomer(CustomerApiTransfer $customerApiTransfer);

    /**
     * Specification:
     *  - Finds customer by customer ID.
     *  - Throws CustomerNotFoundException if not found.
     *  - Entity is modified with data from CustomerTransfer and saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @throws \Spryker\Zed\Customer\Business\Exception\CustomerNotFoundException
     *
     * @return void
     */
    public function updateCustomer(CustomerTransfer $customerTransfer);

    /**
     * Specification:
     *  - Finds customer by customer ID.
     *  - Throws CustomerNotFoundException if not found.
     *  - Deletes customer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @throws \Spryker\Zed\Customer\Business\Exception\CustomerNotFoundException
     *
     * @return void
     */
    public function deleteCustomer(CustomerTransfer $customerTransfer);

}

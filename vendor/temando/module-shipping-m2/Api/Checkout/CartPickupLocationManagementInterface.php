<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */

namespace Temando\Shipping\Api\Checkout;

use Magento\Framework\Exception\CouldNotSaveException;

/**
 * Process "pickup location" delivery option.
 *
 * @api
 * @package Temando\Shipping\Api
 * @author  Sebastian Ertner <sebastian.ertner@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
interface CartPickupLocationManagementInterface
{
    /**
     * Retrieve pickup locations matching the customer's search parameters.
     *
     * @param int $cartId
     * @return \Temando\Shipping\Api\Data\Delivery\QuotePickupLocationInterface[]
     */
    public function getPickupLocations(int $cartId): array;

    /**
     * Select a given pickup location for checkout.
     *
     * @param int $cartId
     * @param string $pickupLocationId
     * @return bool
     * @throws CouldNotSaveException
     */
    public function selectPickupLocation(int $cartId, string $pickupLocationId): bool;
}

<?php
/**
 * Copyright Wagento Creative LLC ©, All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Wagento\Subscription\Api;

interface SalesSubscriptionRepositoryInterface
{
    /**
     * Create or update a subscription.
     *
     * @param \Wagento\Subscription\Api\Data\SalesSubscriptionInterface $subscription
     * @return \Wagento\Subscription\Api\Data\SalesSubscriptionInterface
     * @throws \Magento\Framework\Exception\InputException If bad input is provided
     * @throws \Magento\Framework\Exception\State\InputMismatchException If the provided email is already used
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Wagento\Subscription\Api\Data\SalesSubscriptionInterface $subscription);

    /**
     * Get subscription by Subscription ID.
     *
     * @param int $subscriptionId
     * @return \Wagento\Subscription\Api\Data\SalesSubscriptionInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If subscription with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($subscriptionId);

    /**
     * Delete subscription by ID.
     *
     * @param int $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}

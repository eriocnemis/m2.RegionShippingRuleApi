<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Eriocnemis\RegionShippingRuleApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Rule interface
 *
 * @api
 */
interface RuleInterface extends ExtensibleDataInterface
{
    /**
     * Rule id field name
     */
    const RULE_ID = 'rule_id';

    /**
     * Name field name
     */
    const NAME = 'name';

    /**
     * Description field name
     */
    const DESCRIPTION = 'description';

    /**
     * From date field name
     */
    const FROM_DATE = 'from_date';

    /**
     * To date field name
     */
    const TO_DATE = 'to_date';

    /**
     * Status field name
     */
    const STATUS = 'status';

    /**
     * Website ids field name
     */
    const WEBSITE_IDS = 'website_ids';

    /**
     * Methods access field name
     */
    const METHODS_ACCESS = 'methods_access';

    /**
     * Shipping methods field name
     */
    const SHIPPING_METHODS = 'shipping_methods';

    /**
     * Customer group ids field name
     */
    const CUSTOMER_GROUP_IDS = 'customer_group_ids';

    /**
     * Retrieve rule id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set rule id
     *
     * @param int $ruleId
     * @return $this
     */
    public function setId($ruleId);

    /**
     * Retrieve rule name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set rule name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Retrieve description
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * Retrieve the start date when the rule is active
     *
     * @return string|null
     */
    public function getFromDate();

    /**
     * Set the star date when the rule is active
     *
     * @param string $fromDate
     * @return $this
     */
    public function setFromDate($fromDate);

    /**
     * Retrieve the end date when the rule is active
     *
     * @return string|null
     */
    public function getToDate();

    /**
     * Set the end date when the rule is active
     *
     * @param string $toDate
     * @return $this
     */
    public function setToDate($toDate);

    /**
     * Whether the rule is active
     *
     * @return bool
     */
    public function getStatus();

    /**
     * Set whether the rule is active
     *
     * @param bool $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Retrieve a list of websites the rule applies to
     *
     * @return int[]
     */
    public function getWebsiteIds();

    /**
     * Set the websites the rule applies to
     *
     * @param int[] $websiteIds
     * @return $this
     */
    public function setWebsiteIds(array $websiteIds);

    /**
     * Whether the methods access
     *
     * @return bool
     */
    public function getMethodsAccess();

    /**
     * Set whether the methods access
     *
     * @param bool $access
     * @return $this
     */
    public function setMethodsAccess($access);

    /**
     * Retrieve a list of shipping methods the rule applies to
     *
     * @return string[]
     */
    public function getShippingMethods();

    /**
     * Set the shipping methods the rule applies to
     *
     * @param string[] $shippingMethods
     * @return $this
     */
    public function setShippingMethods(array $shippingMethods);

    /**
     * Retrieve a list of customer group ids the rule applies to
     *
     * @return int[]
     */
    public function getCustomerGroupIds();

    /**
     * Set the customer group ids the rule applies to
     *
     * @param int[] $customerGroupIds
     * @return $this
     */
    public function setCustomerGroupIds(array $customerGroupIds);

    /**
     * Retrieve existing extension attributes object or create a new one
     *
     * @return \Eriocnemis\RegionShippingRuleApi\Api\Data\RuleExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     *
     * @param \Eriocnemis\RegionShippingRuleApi\Api\Data\RuleExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(RuleExtensionInterface $extensionAttributes);
}

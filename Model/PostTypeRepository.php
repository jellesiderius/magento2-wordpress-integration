<?php
/**
 * @package FishPig_WordPress
 * @author  Ben Tideswell (ben@fishpig.com)
 * @url     https://fishpig.co.uk/magento/wordpress-integration/
 */
declare(strict_types=1);

namespace FishPig\WordPress\Model;

class PostTypeRepository extends \FishPig\WordPress\Model\Repository\DataSourceRepository
{
    /**
     * @param \FishPig\WordPress\Model\PostFactory $postFactory
     */
    public function __construct(
        \FishPig\WordPress\Api\Data\PostTypeTaxonomyDataSourceInterface $dataSource,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \FishPig\WordPress\Model\PostTypeFactory $objectFactory
    ) {
        $this->objectFactory = $objectFactory;
        parent::__construct($dataSource, $storeManager);
    }
}

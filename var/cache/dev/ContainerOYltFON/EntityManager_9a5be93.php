<?php

namespace ContainerOYltFON;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8fe37 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer91cdd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd031a = [
        
    ];

    public function getConnection()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getConnection', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getMetadataFactory', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getExpressionBuilder', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'beginTransaction', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getCache', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getCache();
    }

    public function transactional($func)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'transactional', array('func' => $func), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'wrapInTransaction', array('func' => $func), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'commit', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->commit();
    }

    public function rollback()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'rollback', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getClassMetadata', array('className' => $className), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'createQuery', array('dql' => $dql), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'createNamedQuery', array('name' => $name), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'createQueryBuilder', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'flush', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'clear', array('entityName' => $entityName), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->clear($entityName);
    }

    public function close()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'close', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->close();
    }

    public function persist($entity)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'persist', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'remove', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'refresh', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'detach', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'merge', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getRepository', array('entityName' => $entityName), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'contains', array('entity' => $entity), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getEventManager', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getConfiguration', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'isOpen', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getUnitOfWork', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getProxyFactory', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'initializeObject', array('obj' => $obj), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'getFilters', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'isFiltersStateClean', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'hasFilters', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return $this->valueHolder8fe37->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer91cdd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8fe37) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8fe37 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8fe37->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, '__get', ['name' => $name], $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        if (isset(self::$publicPropertiesd031a[$name])) {
            return $this->valueHolder8fe37->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fe37;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8fe37;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fe37;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8fe37;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, '__isset', array('name' => $name), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fe37;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8fe37;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, '__unset', array('name' => $name), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fe37;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8fe37;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, '__clone', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        $this->valueHolder8fe37 = clone $this->valueHolder8fe37;
    }

    public function __sleep()
    {
        $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, '__sleep', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;

        return array('valueHolder8fe37');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer91cdd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer91cdd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer91cdd && ($this->initializer91cdd->__invoke($valueHolder8fe37, $this, 'initializeProxy', array(), $this->initializer91cdd) || 1) && $this->valueHolder8fe37 = $valueHolder8fe37;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8fe37;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8fe37;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

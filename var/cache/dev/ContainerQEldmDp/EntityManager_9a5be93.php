<?php

namespace ContainerQEldmDp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3917f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer19fcf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfa056 = [
        
    ];

    public function getConnection()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getConnection', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getMetadataFactory', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getExpressionBuilder', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'beginTransaction', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getCache', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'transactional', array('func' => $func), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'commit', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->commit();
    }

    public function rollback()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'rollback', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getClassMetadata', array('className' => $className), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'createQuery', array('dql' => $dql), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'createNamedQuery', array('name' => $name), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'createQueryBuilder', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'flush', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'clear', array('entityName' => $entityName), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->clear($entityName);
    }

    public function close()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'close', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->close();
    }

    public function persist($entity)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'persist', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'remove', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'refresh', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'detach', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'merge', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'contains', array('entity' => $entity), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getEventManager', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getConfiguration', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'isOpen', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getUnitOfWork', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getProxyFactory', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'initializeObject', array('obj' => $obj), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'getFilters', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'isFiltersStateClean', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'hasFilters', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return $this->valueHolder3917f->hasFilters();
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

        $instance->initializer19fcf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3917f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3917f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3917f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, '__get', ['name' => $name], $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        if (isset(self::$publicPropertiesfa056[$name])) {
            return $this->valueHolder3917f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3917f;

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

        $targetObject = $this->valueHolder3917f;
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
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3917f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3917f;
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
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, '__isset', array('name' => $name), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3917f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3917f;
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
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, '__unset', array('name' => $name), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3917f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3917f;
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
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, '__clone', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        $this->valueHolder3917f = clone $this->valueHolder3917f;
    }

    public function __sleep()
    {
        $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, '__sleep', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;

        return array('valueHolder3917f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer19fcf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer19fcf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer19fcf && ($this->initializer19fcf->__invoke($valueHolder3917f, $this, 'initializeProxy', array(), $this->initializer19fcf) || 1) && $this->valueHolder3917f = $valueHolder3917f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3917f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3917f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

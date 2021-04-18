<?php

namespace Container6Heq29m;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder78935 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeree48f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40eee = [
        
    ];

    public function getConnection()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getConnection', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getMetadataFactory', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getExpressionBuilder', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'beginTransaction', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getCache', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getCache();
    }

    public function transactional($func)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'transactional', array('func' => $func), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->transactional($func);
    }

    public function commit()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'commit', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->commit();
    }

    public function rollback()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'rollback', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getClassMetadata', array('className' => $className), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'createQuery', array('dql' => $dql), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'createNamedQuery', array('name' => $name), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'createQueryBuilder', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'flush', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'clear', array('entityName' => $entityName), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->clear($entityName);
    }

    public function close()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'close', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->close();
    }

    public function persist($entity)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'persist', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'remove', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'refresh', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'detach', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'merge', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getRepository', array('entityName' => $entityName), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'contains', array('entity' => $entity), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getEventManager', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getConfiguration', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'isOpen', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getUnitOfWork', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getProxyFactory', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'initializeObject', array('obj' => $obj), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'getFilters', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'isFiltersStateClean', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'hasFilters', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return $this->valueHolder78935->hasFilters();
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

        $instance->initializeree48f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder78935) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder78935 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder78935->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, '__get', ['name' => $name], $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        if (isset(self::$publicProperties40eee[$name])) {
            return $this->valueHolder78935->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78935;

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

        $targetObject = $this->valueHolder78935;
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
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78935;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder78935;
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
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, '__isset', array('name' => $name), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78935;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder78935;
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
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, '__unset', array('name' => $name), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78935;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder78935;
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
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, '__clone', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        $this->valueHolder78935 = clone $this->valueHolder78935;
    }

    public function __sleep()
    {
        $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, '__sleep', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;

        return array('valueHolder78935');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeree48f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeree48f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeree48f && ($this->initializeree48f->__invoke($valueHolder78935, $this, 'initializeProxy', array(), $this->initializeree48f) || 1) && $this->valueHolder78935 = $valueHolder78935;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder78935;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder78935;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

Here is your zip with Eureka fully integrated. Now let me explain exactly what was done and how to set it up.

---

## What is Inside the ZIP

```
ecommerce-with-eureka/
├── eureka-server/         ← NEW — the service registry
├── item-service/          ← updated with Eureka client
├── inventory-service/     ← updated with Eureka client
├── notification-service/  ← updated with Eureka client
└── audit-service/         ← updated with Eureka client
```

---

## What Changed in Each Existing Service — Only 3 Things

---

### Change 1 — pom.xml (added 2 blocks)

```xml
<!-- Added in <properties> -->
<spring-cloud.version>2023.0.0</spring-cloud.version>

<!-- Added in <dependencies> -->
<dependency>
    <groupId>org.springframework.cloud</groupId>
    <artifactId>spring-cloud-starter-netflix-eureka-client</artifactId>
</dependency>

<!-- Added new block <dependencyManagement> -->
<dependencyManagement>
    <dependencies>
        <dependency>
            <groupId>org.springframework.cloud</groupId>
            <artifactId>spring-cloud-dependencies</artifactId>
            <version>${spring-cloud.version}</version>
            <type>pom</type>
            <scope>import</scope>
        </dependency>
    </dependencies>
</dependencyManagement>
```

---

### Change 2 — application.properties (added 5 lines)

```properties
spring.application.name=item-service
eureka.client.service-url.defaultZone=http://localhost:8761/eureka/
eureka.client.register-with-eureka=true
eureka.client.fetch-registry=true
eureka.instance.prefer-ip-address=true
```

Each service has its own `spring.application.name` — item-service, inventory-service, notification-service, audit-service.

---

### Change 3 — Main Application class (added 1 annotation)

```java
@SpringBootApplication
@EnableDiscoveryClient      ← this line added
public class ItemServiceApplication {
```

---

## How to Run Step by Step in STS

**Step 1** — Import all 5 projects into STS
`File → Import → Maven → Existing Maven Projects → select ecommerce-with-eureka folder → check all 5 → Finish`

**Step 2** — Wait for Maven to download dependencies (first time takes 2-3 minutes)

**Step 3** — Start **eureka-server FIRST**
Right click eureka-server → Run As → Spring Boot App
Wait until console shows: `Started EurekaServerApplication`

**Step 4** — Start the 4 services one by one
Right click each → Run As → Spring Boot App

**Step 5** — Open Eureka Dashboard
`http://localhost:8761`

You will see this screen with all 4 services listed:

```
Instances currently registered with Eureka:
┌──────────────────────┬──────────────────────────────────┐
│ ITEM-SERVICE         │ UP  (1) - 192.168.x.x:8081      │
│ INVENTORY-SERVICE    │ UP  (1) - 192.168.x.x:8082      │
│ NOTIFICATION-SERVICE │ UP  (1) - 192.168.x.x:8083      │
│ AUDIT-SERVICE        │ UP  (1) - 192.168.x.x:8084      │
└──────────────────────┴──────────────────────────────────┘
```

**Step 6** — Test APIs normally via Swagger same as before. Nothing changed in the APIs.

---

## Most Important Rule

```
⚠️  ALWAYS START EUREKA SERVER FIRST
⚠️  THEN START THE OTHER 4 SERVICES

If you start services before Eureka → they cannot register
```

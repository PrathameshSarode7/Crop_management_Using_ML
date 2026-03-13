server:
  port: 8080

spring:
  application:
    name: api-gateway
  security:
    oauth2:
      client:
        registration:
          keycloak:
            client-id: item-management-client
            # CHANGE THIS: paste your client secret from Keycloak
            client-secret: PASTE_YOUR_CLIENT_SECRET_HERE
            authorization-grant-type: authorization_code
            redirect-uri: "{baseUrl}/login/oauth2/code/keycloak"
            scope: openid, profile, email
        provider:
          keycloak:
            issuer-uri: http://localhost:8180/realms/item-management
            authorization-uri: http://localhost:8180/realms/item-management/protocol/openid-connect/auth
            token-uri: http://localhost:8180/realms/item-management/protocol/openid-connect/token
            user-info-uri: http://localhost:8180/realms/item-management/protocol/openid-connect/userinfo
            jwk-set-uri: http://localhost:8180/realms/item-management/protocol/openid-connect/certs
            user-name-attribute: preferred_username
  cloud:
    gateway:
      discovery:
        locator:
          enabled: true
          lower-case-service-id: true
      routes:
        - id: item-service
          uri: lb://item-service
          predicates:
            - Path=/api/items/**

        - id: inventory-service
          uri: lb://inventory-service
          predicates:
            - Path=/api/inventory/**

        - id: notification-service
          uri: lb://notification-service
          predicates:
            - Path=/api/notifications/**

        - id: audit-service
          uri: lb://audit-service
          predicates:
            - Path=/api/audit/**

eureka:
  client:
    service-url:
      defaultZone: http://localhost:8761/eureka/
  instance:
    prefer-ip-address: true

management:
  endpoints:
    web:
      exposure:
        include: health,info

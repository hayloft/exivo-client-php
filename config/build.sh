docker run --rm -v ${PWD}:/local swaggerapi/swagger-codegen-cli generate \
    -i /local/api.json \
    -l php \
    -o /local/gen \
    -c /local/config.json

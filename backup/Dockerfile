FROM debian:bullseye-slim

RUN apt-get update && apt-get install -y default-mysql-client awscli && rm -rf /var/lib/apt/lists/*

COPY backup.sh /backup.sh
RUN chmod +x /backup.sh

ENTRYPOINT ["/bin/sh", "/backup.sh"]
